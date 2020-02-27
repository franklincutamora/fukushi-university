/**
 * 吉田学園WP総合API（Y-API） JavaScript
 * depend on jQuery
 * depend on Underscore.js（included in ylib.js）
 */

//本番環境
var BASE_URL = 'https://yoshida-g.gr.jp/api/';

var YAPI = {
	//----------------------------------------------------------------------------
	//
	// 定数
	//
	//----------------------------------------------------------------------------
	API_URLS : {
		obog : {
			posts : BASE_URL + 'obog/getPosts.json',
			post : BASE_URL + 'obog/getPost.json',
			terms : BASE_URL + 'obog/getTerms.json'
		},
		gakusei : {
			posts : BASE_URL + 'gakusei/getPosts.json',
			post : BASE_URL + 'gakusei/getPost.json',
			terms : BASE_URL + 'gakusei/getTerms.json'
		},
		shikaku : {
			posts : BASE_URL + 'shikaku/getPosts.json',
			post : BASE_URL + 'shikaku/getPost.json',
			terms : BASE_URL + 'shikaku/getTerms.json'
		},
		shushoku : {
			posts : BASE_URL + 'shushoku/getPosts.json',
			post : BASE_URL + 'shushoku/getPost.json',
			terms : BASE_URL + 'shushoku/getTerms.json'
		},
		'shushoku-bunya' : {
			posts : BASE_URL + 'shushokuBunya/getPosts.json',
			post : BASE_URL + 'shushokuBunya/getPost.json',
			terms : BASE_URL + 'shushokuBunya/getTerms.json'
		},
		boshu : {
			posts : BASE_URL + 'boshu/getPosts.json',
			post : BASE_URL + 'boshu/getPost.json',
			terms : BASE_URL + 'boshu/getTerms.json'
		},
		campus : {
			posts : BASE_URL + 'campus/getPosts.json',
			post : BASE_URL + 'campus/getPost.json',
			terms : BASE_URL + 'campus/getTerms.json',
			page : BASE_URL + 'campus/getPage.json'
		}
	},
	ELM_LOADING_LAYER : '#loading-layer',


	//----------------------------------------------------------------------------
	//
	// プロパティ
	//
	//----------------------------------------------------------------------------
	loadingNum : 0,
	currentTerm : '',
	currentPagerData : null,


	//----------------------------------------------------------------------------
	//
	// メソッド
	//
	//----------------------------------------------------------------------------
	/**
	 * Y-API 初期化
	 */
	init : function(){
		$('script[type="text/template"][data-yapi="single"]').each(function(){
			YAPI.doYapiSingle(this);
		});
		$('script[type="text/template"][data-yapi="repeat"]').each(function(){
			YAPI.doYapiRepeat(this);
		});
	},

	/**
	 * ajax通信実行
	 * @param url
	 * @param params
	 * @param successCb
	 */
	ajax : function(url, params, successCb){
		if(YAPI.loadingNum == 0 && $(YAPI.ELM_LOADING_LAYER).size() > 0){
			$(YAPI.ELM_LOADING_LAYER).fadeIn(100);
		}
		YAPI.loadingNum++;

		$.post(url, params, function(res){
			if(successCb){
				YAPI.loadingNum--;
				if(YAPI.loadingNum <= 0 && $(YAPI.ELM_LOADING_LAYER).size() > 0){
					$(YAPI.ELM_LOADING_LAYER).fadeOut(100);
				}
				successCb(res);
			}
		});

		/*$.ajax({
			context: this,
			type: 'POST',
			url: url,
			data: params,
			*//*dataType: 'json',*//*
			success: function (res) {
				if(successCb){
					YAPI.loadingNum--;
					if(YAPI.loadingNum <= 0 && $(YAPI.ELM_LOADING_LAYER).size() > 0){
						$(YAPI.ELM_LOADING_LAYER).fadeOut(100);
					}
					successCb(res);
				}
			}
		});*/
	},

	/**
	 * yapi-singleディレクティブ処理
	 * @param elm
	 * @param filter
	 */
	doYapiSingle : function(elm, filter){
		if(!filter){
			filter = {};
		}
		filter['posts_per_page'] = 1;
		filter['page'] = 1;
		YAPI.doYapiRepeat(elm, filter);
	},

	/**
	 * yapi-repeatディレクティブ処理
	 * @param elm
	 * @param filter
	 */
	doYapiRepeat : function(elm, filter){
		try {
			var $container = $(elm).parent();
			var templateHtml = $(elm).html();

			var siteType = $(elm).data('yapi-type').split('.')[0];
			var dataType = $(elm).data('yapi-type').split('.')[1];
			var url = YAPI.API_URLS[siteType][dataType];
			var sendFilter = {};

			//デフォルトフィルターを設定
			var defaultFilter = $(elm).data('yapi-filter');
			if(defaultFilter){
				var formulas = defaultFilter.split('&');
				for(var i=0; i<formulas.length; i++){
					var kv = formulas[i].split('=');
					sendFilter[kv[0]] = kv[1];
				}
			}
			//そして指定フィルターを上書き
			if(filter){
				$.each(filter, function(k,v){
					sendFilter[k] = v;
				});
			}

			if(sendFilter['term']){
				YAPI.currentTerm = sendFilter['term'];
			}

			console.log(sendFilter);
			console.log(url);

			YAPI.ajax(url, sendFilter, function(res){
				$(elm).parent().find('*:not(script):not([data-yapi-not-delete="true"])').remove();
				console.log(res);
				var posts = res.response;
				$.each(posts, function(k,post){
					$container.append(_.template(templateHtml)(post));
				});

				//ページャー指定がある場合
				var pagerElm = $(elm).data('yapi-pager');
				if(pagerElm){
					$(pagerElm).parent().find('*:not(script):not([data-yapi-not-delete="true"])').remove();
					var pagerData = res.meta.pager;
					$(pagerElm).parent().append(_.template($(pagerElm).html())(pagerData));

					YAPI.currentPagerData = res.meta.pager;
				}
			});

		} catch(e) {
			//console.log(e);
		}
	},

	/**
	 * ページ変更時の処理
	 * @param e
	 * @param page
	 * @param listElm
	 */
	onChangePage : function(e, page, listElm){
		e.preventDefault();
		YAPI.doYapiRepeat(listElm, {page : page, term : YAPI.currentTerm});
	},

	/**
	 * 親ターム（学校）変更時の処理
	 * @param e
	 * @param listElm
	 * @param termSlug
	 * @param termName
	 * @param labelElm
	 * @param childTermListElm
	 * @param childLabelElm
	 */
	onChangeParentTerm : function(e, listElm, termSlug, termName, labelElm, childTermListElm, childLabelElm){
		e.preventDefault();
		$(labelElm).text(termName);
		$(childTermListElm).hide();
		$(childTermListElm).find('li').hide();
		$(childTermListElm).find('li[data-parent-term-slug="'+termSlug+'"]').show();
		$(childLabelElm).text($(childLabelElm).data('default'));

		var filter = null;
		if(termSlug){
			filter = {term : termSlug};
		}
		YAPI.doYapiRepeat(listElm, filter);
	},

	/**
	 * 子ターム（学科）変更時の処理
	 * @param e
	 * @param listElm
	 * @param termSlug
	 * @param termName
	 * @param labelElm
	 */
	onChangeChildTerm : function(e, listElm, termSlug, termName, labelElm){
		e.preventDefault();
		$(labelElm).text(termName);
		var filter = null;
		if(termSlug){
			filter = {term : termSlug};
		}
		YAPI.doYapiRepeat(listElm, filter);
	},

	/**
	 * 記事詳細モーダル表示
	 * @param e
	 * @param siteType
	 * @param postId
	 * @param modalElm
	 * @param containerElm
	 * @param closeElm
	 */
	showPostModal : function(e, siteType, postId, modalTemplateElm, containerElm, closeElm){
		e.preventDefault();

		try {
			var url = YAPI.API_URLS[siteType]['post'];
			var params = {postId : postId};
			var templateHtml = $(modalTemplateElm).html();

			YAPI.ajax(url, params, function(res){
				//console.log(res);
				var post = res.response;
				var html = _.template(templateHtml)(post);
				var $modalElm = $($.trim(html));

				$(containerElm).modalShow($modalElm);
				YAPI.centeringModalSyncer();
				$(closeElm).off().on('click', function(){
					$(containerElm).modalHidden($modalElm);
				});
			});

		} catch(e) {

		}
	},

	/**
	 * モーダルをセンタリング
	 */
	centeringModalSyncer : function(){
		//画面(ウィンドウ)の幅、高さを取得
		var w = $(window).width();
		var h = $(window).height();
		//コンテンツ(#entry)の幅、高さを取得
		var cw = $("#entry").innerWidth();
		var ch = $("#entry").innerHeight();
		//センタリングを実行する TODO #entry でいいのか
		$("#entry").css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"})
	}
};

$(function(){
	YAPI.init();
});