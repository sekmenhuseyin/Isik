if(typeof(loc)=="undefined"||loc==""){var loc="";if(document.body&&document.body.innerHTML){var tt=document.body.innerHTML.toLowerCase();var last=tt.indexOf("index_hnavbar.js\"");if(last>0){var first=tt.lastIndexOf("\"",last);if(first>0&&first<last)loc=document.body.innerHTML.substr(first+1,last-first-1);}}}

var bd=0
document.write("<style type=\"text/css\">");
document.write("\n<!--\n");
var tr="filter:alpha(opacity=80);";if(IE5) tr="";
document.write(".index_hnavbar_menu {"+tr+"border-color:black;border-style:solid;border-width:"+bd+"px 0px "+bd+"px 0px;background-color:#294268;position:absolute;left:0px;top:0px;visibility:hidden;}");
document.write(".index_hnavbar_plain:link, .index_hnavbar_plain:visited{text-align:left;background-color:#294268;color:#ffffff;text-decoration:none;border-color:black;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:8pt;font-family:Arial, Helvetica, sans-serif;font-weight:bold;}");
document.write(".index_hnavbar_plain:hover{background-color:#5183d0;color:#ffffff;text-decoration:none;border-color:black;border-style:solid;border-width:0px "+bd+"px 0px "+bd+"px;padding:2px 0px 2px 0px;cursor:hand;display:block;font-size:8pt;font-family:Arial, Helvetica, sans-serif;font-weight:bold;}");
document.write("\n-->\n");
document.write("</style>");

var fc=0xffffff;
var bc=0x5183d0;
if(typeof(frames)=="undefined"){var frames=4;if(frames>0)animate();}

startMainMenu("",20,50,2,0,0)
mainMenuItem("index_hnavbar_b1",".gif",20,80,"javascript:;","","Okullarımız",2,2,"index_hnavbar_plain");
mainMenuItem("index_hnavbar_b2",".gif",20,78,"javascript:;","","Tarihçemiz",2,2,"index_hnavbar_plain");
mainMenuItem("index_hnavbar_b3",".gif",20,104,"javascript:;","","Okul Aile Birliği",2,2,"index_hnavbar_plain");
mainMenuItem("index_hnavbar_b4",".gif",20,90,"javascript:;","","Başarılarımız",2,2,"index_hnavbar_plain");
mainMenuItem("index_hnavbar_b5",".gif",20,100,"ataturk.php","","Atatürk Köşesi",2,2,"index_hnavbar_plain");
endMainMenu("",20,50)

startSubmenu("index_hnavbar_b5","index_hnavbar_menu",100);
submenuItem("Ailesi","ataturk.php?page=aile","","index_hnavbar_plain");
submenuItem("Çocukluğu","ataturk.php?page=cck","","index_hnavbar_plain");
submenuItem("Eğitim Hayatı","ataturk.php?page=eitim","","index_hnavbar_plain");
submenuItem("Askerliği","ataturk.php?page=asker","","index_hnavbar_plain");
submenuItem("Sivil Hayatı","ataturk.php?page=sivil","","index_hnavbar_plain");
submenuItem("Sonu","ataturk.php?page=olum","","index_hnavbar_plain");
endSubmenu("index_hnavbar_b5");

startSubmenu("index_hnavbar_b4","index_hnavbar_menu",90);
submenuItem("Menu Text 1","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 2","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 3","javascript:;","","index_hnavbar_plain");
endSubmenu("index_hnavbar_b4");

startSubmenu("index_hnavbar_b3","index_hnavbar_menu",104);
submenuItem("Menu Text 1","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 2","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 3","javascript:;","","index_hnavbar_plain");
endSubmenu("index_hnavbar_b3");

startSubmenu("index_hnavbar_b2","index_hnavbar_menu",79);
submenuItem("Menu Text 1","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 2","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 3","javascript:;","","index_hnavbar_plain");
endSubmenu("index_hnavbar_b2");

startSubmenu("index_hnavbar_b1","index_hnavbar_menu",80);
submenuItem("Menu Text 1","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 2","javascript:;","","index_hnavbar_plain");
submenuItem("Menu Text 3","javascript:;","","index_hnavbar_plain");
endSubmenu("index_hnavbar_b1");

loc="";
