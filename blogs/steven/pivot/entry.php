<!DOCTYPE html>
<html>
<head>
	<title>https://blogs.cuttingedge.it/steven/</title>
	<link rel="canonical" href="https://blogs.cuttingedge.it/steven/"/>
	<meta name="robots" content="noindex">
	<meta charset="utf-8" />
</head>
<body>
My blog has moved to <a href="https://blogs.cuttingedge.it/steven/">https://blogs.cuttingedge.it/steven/</a>. If you have JavaScript enabled, you will automatically be redirected.
</body>
<script>
function qs(key) {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars[key];
}

var redirects = { };

// Migrated posts
redirects['101'] = "posts/2017/simple-injector-v4/";
redirects['100'] = "posts/2016/abstract-factories-are-a-code-smell/";
redirects['99'] = "posts/2015/code-smell-injecting-runtime-data-into-components/";
redirects['98'] = "posts/2014/dependency-injection-in-attributes-dont-do-it/";
redirects['97'] = "posts/2013/di-anti-pattern-multiple-constructors/";
redirects['96'] = "posts/2013/simple-injector-2-the-future-is-here/";
redirects['95'] = "posts/2012/writing-highly-maintainable-wcf-services/";
redirects['94'] = "posts/2012/primitive-dependencies-with-simple-injector/";
redirects['93'] = "posts/2012/returning-data-from-command-handlers/";
redirects['92'] = "posts/2011/meanwhile-on-the-query-side-of-my-architecture/";
redirects['91'] = "posts/2011/meanwhile-on-the-command-side-of-my-architecture/";
redirects['90'] = "posts/2011/adding-covariance-and-contravariance-to-simple-injector/";
redirects['81'] = "posts/2010/di-in-asp-net-web-forms/";
redirects['76'] = "posts/2010/breaking-changes-in-smtpclient-in-net40/";
redirects['75'] = "posts/2010/protecting-against-regex-dos-attacks/";
redirects['48'] = "posts/2009/protecting-against-xml-expansion-attacks/";
redirects['42'] = "posts/2008/the-death-of-linq-to-sql/";
redirects['29'] = "posts/2007/readonlydictionary/";
redirects['4'] = "posts/2006/net-backwards-compatibility/";
redirects['3'] = "posts/2006/welcome-to-my-blog/";

var id = qs('id');

var rootPath = 'https://blogs.cuttingedge.it/steven/';

var redirect = redirects[id];

if (redirect !== undefined)
{
	window.location.replace(rootPath + redirect);
}
else
{
	window.location.replace(rootPath + 'archive/' + id + '.html');
}
</script>
</html>