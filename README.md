Startup News API
==============

[Startup News](http:news.dbanotes.net) 非官方API

## API
- Path/news 获取Startup News首页内容
- Path/newest 获取Startup News新提交内容

![newest](https://raw.github.com/xhinking/StartupNewsAPI/master/screenshot/json.png)

## Demo
部署于SAE的Startup News API，仅供提供测试使用(云豆不多啊，大家不要请求太频繁)。
[Get Index News](http://7h2oappengine.sinaapp.com/snapi/news.php)
[Get New News](http://7h2oappengine.sinaapp.com/snapi/newest.php)

## 说明
抓取Startup News首页和新提交页面，解析生成JSON格式。期待Startup News官方API。

## 注意
- 抓取基于HTML解析，API可能随时随SN页面变动失效
- 未作错误处理