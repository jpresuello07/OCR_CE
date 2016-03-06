/*INITIAL COUNTERS FOR TABLE*/
midtermCounter=0
finalsCounter=0
attCounter1=0;
attCounter2=0;
attAdd1=0;
attAdd2=0;

/* ADD BUTTON ATT1*/
$('#table-att1-button').click(function(){
	$('#table-att1').each(function(){
		if ($(this).attr('colspan') != 17){
			attCounter1++;
		    var attSpan1=3+attCounter1;
		    attAdd1 = attSpan1-2;
		    $(this).attr('colspan',attSpan1);
		    $(this).val(attCounter1);
			
			$('#table-midterm').each(function(){
		    midtermCounter++;
		    var midtermSpan1=17+midtermCounter;
		    $(this).attr('colspan',midtermSpan1);
		    $(this).val(midtermCounter);
		});

		$('#table-att1-button-del').css('display', 'inline-block');
		$('#table-att1-total').before($("<td class='fixed-width' contenteditable='true'></td>"));
		$('tr #table-name-att1').before($("<td class='fixed-width' contenteditable='true'></td>")); // ADD NEW COLUMNS FOR ALL DUMMY ACCOUNT
		}
	});
});
/*DEL BUTTON ATT1*/
$('#table-att1-button-del').click(function(){
	var result = confirm("Are you sure you want to delete column?");
	if (result) {
	$('#table-att1').each(function(){
		if ($(this).attr('colspan') != 3){
		    attCounter1--;
		    var attSpan1=3+attCounter1;
		    $(this).attr('colspan',attSpan1);
		    $(this).val(attCounter1);
			    console.log($(this).attr('colspan'))
			$('#table-midterm').each(function(){
			    midtermCounter--;
			    var midtermSpan1=12+midtermCounter;
			    $(this).attr('colspan',midtermSpan1);
			    $(this).val(midtermCounter);
			});	

		$('#table-att1-total').prev().remove();
		
		$('tr #table-name-att1').prev().remove();
		}

		if ($(this).attr('colspan') == 3){
			$('#table-att1-button-del').css('display', 'none');			
		}
	});
}
});



/*--FINALS--*/
/* ADD BUTTON ATT1*/
$('#table-att2-button').click(function(){
	$('#table-att2').each(function(){
		if ($(this).attr('colspan') != 17){
			attCounter2++;
		    var attSpan2=3+attCounter2;
		    attAdd2 = attSpan2-2;
		    $(this).attr('colspan',attSpan2);
		    $(this).val(attCounter2);
			
			$('#table-finals').each(function(){
		    finalsCounter++;
		    var finalsSpan1=12+finalsCounter;
		    $(this).attr('colspan',finalsSpan1);
		    $(this).val(finalsCounter);
		});

		$('#table-att2-button-del').css('display', 'inline-block');
		$('#table-att2-total').before($("<td class='fixed-width' contenteditable='true'></td>"));
		
		$('tr #table-name-att2').before($("<td class= 'fixed-width' contenteditable='true'></td>")); // ADD NEW COLUMNS FOR ALL DUMMY ACCOUNT
		}
	});
});
/*DEL BUTTON ATT2*/
$('#table-att2-button-del').click(function(){
	var result = confirm("Are you sure you want to delete column?");
	if (result) {
	$('#table-att2').each(function(){
		if ($(this).attr('colspan') != 3){
		    attCounter2--;
		    var labSpan2=3+attCounter2;
		    $(this).attr('colspan',labSpan2);
		    $(this).val(attCounter2);
			    console.log($(this).attr('colspan'))
			$('#table-finals').each(function(){
			    finalsCounter--;
			    var finalsSpan4=12+finalsCounter;
			    $(this).attr('colspan',finalsSpan4);
			    $(this).val(finalsCounter);
			});	

		$('#table-att2-total').prev().remove();
		
		$('tr #table-name-att2').prev().remove();
		}

		if ($(this).attr('colspan') == 3){
			$('#table-att2-button-del').css('display', 'none');			
		}
	});
}
});

