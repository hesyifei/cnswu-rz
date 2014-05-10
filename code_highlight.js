// this code should be highlighted as JavaScript
// if you're using the HTML highlighter.
function test() {
	var code = document.getElementById("foo").value;
	var hl = new DlHighlight({ lang				: document.getElementById("lang").value,
									 lineNumbers : document.getElementById("lineNo").checked });
	var formatted = hl.doItNow(code);
	var pre = document.getElementById("output");
		pre.className = "DlHighlight";
	// need to insert it in a <pre> because otherwise IE compresses whitespace
		pre.innerHTML = "<pre>" + formatted + "</pre>";
}
function loadCode(val) {
	if (!val)
		return;
	var req;
	if (window.ActiveXObject)
		req = new ActiveXObject("Microsoft.XMLHTTP");
	else if (window.XMLHttpRequest)
		req = new XMLHttpRequest();
	else
		throw "Browser does not support XMLHttpRequest";
	var a = val.split(/:/);
	var url = a[0];
	var lang = a[1];
	document.getElementById("lang").value = lang;
	req.open("GET", url, false);
	req.send();
	document.getElementById("foo").value = req.responseText;
	document.getElementById("output").innerHTML = "";
}