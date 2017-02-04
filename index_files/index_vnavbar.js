var clicked=""
var gtype=".gif"
var selstate="_over"
if (typeof(loc)=="undefined" || loc==""){
	var loc=""
	if (document.body&&document.body.innerHTML){
		var tt = document.body.innerHTML.toLowerCase();
		var last = tt.indexOf("index_vnavbar.js\"");
		if (last>0){
			var first = tt.lastIndexOf("\"", last);
			if (first>0 && first<last) loc = document.body.innerHTML.substr(first+1,last-first-1);
		}
	}
}

document.write("<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>");
document.write("<td><img src=\""+loc+"index_vnavbar_top.gif\" alt=\"\" width=\"140\" height=\"16\"></td>");
tr(false);
writeButton(loc+"../"," ","index_vnavbar_b1",140,20,"    Anasayfa","",0);
writeButton(loc+"../","admin.php","index_vnavbar_b2",140,20,"    Yönetici Gir&#351;i","",0);
writeButton(loc+"../","sorgu.php","index_vnavbar_b3",140,20,"    Ö&#287;renci Sorgu","",0);
writeButton(loc+"../","sosyal.php","index_vnavbar_b4",140,20,"    Sosyal Faaliyetler         ","",0);
writeButton(loc+"../","aboutus.php","index_vnavbar_b5",140,20,"    &#304;leti&#351;im","",0);
tr(true);
document.write("<td><img src=\""+loc+"index_vnavbar_bottom.gif\" alt=\"\" width=\"140\" height=\"16\"></td>");
document.write("</tr></table>")
loc="";

function tr(b){if (b) document.write("<tr>");else document.write("</tr>");}

function turn_over(name) {
	if (document.images != null && clicked != name) {
		document[name].src = document[name+"_over"].src;
	}
}

function turn_off(name) {
	if (document.images != null && clicked != name) {
		document[name].src = document[name+"_off"].src;
	}
}

function reg(gname,name)
{
if (document.images)
	{
	document[name+"_off"] = new Image();
	document[name+"_off"].src = loc+gname+gtype;
	document[name+"_over"] = new Image();
	document[name+"_over"].src = loc+gname+"_over"+gtype;
	}
}

function evs(name){ return " onmouseover=\"turn_over('"+ name + "')\" onmouseout=\"turn_off('"+ name + "')\""}

function writeButton(urld,url,name,w,h,alt,target,hsp){gname=name;while(typeof(document[name])!="undefined")name+="x";reg(gname,name);tr(true);document.write("<td>");if(alt!="")alt=" alt=\""+alt+"\"";if(target!="")target=" target=\""+target+"\"";if(w>0)w=" width=\""+w+"\"";else w="";if(h>0)h=" height=\""+h+"\"";else h="";if(url!="")url=" href=\""+urld+url+"\"";if(typeof(clx)!="undefined"){target="";url=" href=\"?"+clx+"\"";alt=" alt=\"Click to edit\"";}document.write("<a "+url+evs(name)+target+">");if(hsp==-1)hsp=" align=\"right\"";else if(hsp>0)hsp=" hspace=\""+hsp+"\"";else hsp="";document.write("<img src=\""+loc+gname+gtype+"\" name=\""+name+"\""+w+h+alt+hsp+" border=\"0\" /></a></td>");tr(false);}