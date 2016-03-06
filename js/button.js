function getAllData()
{     
	 $("th").each(function(data){
console.log($(this).text());
});
     $("td").each(function(data){
console.log($(this).text());
});
     	return false;
}