var navs = [{
	"title" : "后台首页",
	"icon" : "icon-computer",
	"href" : "main",
	"spread" : false
},{
	"title" : "用户模块",
	"icon" : "&#xe613;",
	"href" : "allUsers",
	"spread" : false,
	"children" : [
		{
			"title" : "用户列表",
			"icon" : "&#xe613;",
			"href" : "allUsers",
			"spread" : false
		},
		{
			"title" : "新增用户",
			"icon" : "&#xe612;",
			"href" : "addUser",
			"spread" : false
		}
	]
},{
	"title" : "文章模块",
	"icon" : "&#xe630;",
	"href" : "list",
	"spread" : false,
	"children" : [
		{
			"title" : "文章列表",
			"icon" : "&#xe632;",
			"href" : "list",
			"spread" : false
		},
		{
			"title" : "新增文章",
			"icon" : "&#xe608;",
			"href" : "add",
			"spread" : false
		},
		{
			"title" : "文章分类",
			"icon" : "&#xe654;",
			"href" : "postType",
			"spread" : false
		}
	]
},{
	"title" : "站点公告",
	"icon" : "&#xe62a;",
	"href" : "notice",
	"spread" : false
},{
	"title" : "图片模块",
	"icon" : "&#xe64a;",
	"href" : "allimages",
	"spread" : false,
	"children" : [
		{
			"title" : "图片列表",
			"icon" : "&#xe60d;",
			"href" : "allimages",
			"spread" : false
		},
		{
			"title" : "图片上传",
			"icon" : "&#xe60d;",
			"href" : "addimages",
			"spread" : false
		}
	]
},{
	"title" : "友情链接",
	"icon" : "&#xe64c;",
	"href" : "",
	"spread" : false,
	"children" : [
		{
			"title" : "链接列表",
			"icon" : "&#xe64c;",
			"href" : "",
			"spread" : false
		},
		{
			"title" : "新增链接",
			"icon" : "&#xe64c;",
			"href" : "",
			"spread" : false
		}
	]
},{
	"title" : "系统基本参数",
	"icon" : "&#xe631;",
	"href" : "systemParameter/systemParameter",
	"spread" : false
}]