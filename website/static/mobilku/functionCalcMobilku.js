        $(document).ready(function(){
		
		function clearFormat(value) {
			value = value.replace(/[^0-9\.]+/g,"");
			value = value.replace(/\./g,'');
			value = value.replace(/,/g,'');
			return value;
		}
		
		var jenisasuransi;
		$("input:radio[name=radio]").click(function() {
			 jenisasuransi = $(this).val();
			 $("#jenisasuransi").html("");
			 $("#jenisasuransi").append(jenisasuransi.toUpperCase());
		});
		
		function calc_result(paket) {
			
			var getColom;
			var harga=clearFormat($('#harga').val());
			var tahun_pembuatan;
			var model;
			var regno;
			var periode;
			var radio01;

			var tipe=$('#tipe').val().toLowerCase();
			var wilayah=parseInt($('#wilayah').val());
			var kapasitas=parseInt($('#kapasitas').val());
			
			
			//=========================perhitungan basic======================================//
			var val_tlo=harga*1; //harga dikali tahun pertama (1), tahun kedua dikali 2 dst.
			var cleanVarTlo=parseInt(val_tlo); //get clean tlo
			var med_ex_val=5000000;
			var cleanMed_ex_val=parseInt(med_ex_val); //get clean tlo
			var pa_val=10000000;
			var cleanPa_val=parseInt(pa_val); //get clean tlo
			var passenger_val=10000000;
			var cleanPassenger_val=parseInt(passenger_val); //get clean tlo
			var tpl_val=50000000;
			var cleanTpl_val=parseInt(tpl_val); //get clean tlo
			
			//get total day in a year
			var now = new Date(2015,1,0);
			var start = new Date(now.getFullYear(),12, 31);
			var diff = start-now;
			var oneDay = 1000 * 60 * 60 * 24;
			var day = Math.ceil(diff / oneDay);
			
			val_tlo=accounting.formatMoney(val_tlo,'',2,'.',',');
			med_ex_val=accounting.formatMoney(med_ex_val,'',2,'.',',');
			pa_val=accounting.formatMoney(pa_val,'',2,'.',',');
			passenger_val=accounting.formatMoney(passenger_val,'',2,'.',',');
			tpl_val=accounting.formatMoney(tpl_val,'',2,'.',',');
					
			//INSER INTO FORM
			$('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').html("");
			$('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').append(val_tlo);
			$('.med_ex_val, .pa_val, .passenger_val, .tpl_val').html("");
			$('.med_ex_val').append(med_ex_val);
			$('.pa_val').append(pa_val);
			$('.passenger_val').append(passenger_val);
			$('.tpl_val').append(tpl_val);
			//========================= END perhitungan basic======================================//
			
			
			//=========================//perhitungan rate/persen======================================//
			var workshop_persen, compre_persen, earthquake_presen, era_persen, flood_persen, med_ex_persen, pa_persen, passenger_persen, personal_ef_persen, pll_persen, riot_persen, terror_persen, tpl_persen;
			workshop_persen=0;
			compre_persen=0;
			
			// if (tlo= 5+wilayah) else (1+wilayah)
			if (jenisasuransi=='tlo') {
				getColom=wilayah+5;
			}else{
				getColom=wilayah+1;
			}
			
			if (getColom==2) {
				earthquake_presen=parseFloat(0.1200);
				flood_persen=parseFloat(0.0750);
				riot_persen=parseFloat(0.0500);
				terror_persen=parseFloat(0.0500);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==3) {
				earthquake_presen=parseFloat(0.1000);
				flood_persen=parseFloat(0.1000);
				riot_persen=parseFloat(0.0500);
				terror_persen=parseFloat(0.0500);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==4) {
				earthquake_presen=parseFloat(0.0750);
				flood_persen=parseFloat(0.0750);
				riot_persen=parseFloat(0.0500);
				terror_persen=parseFloat(0.0500);
				pa_persen=parseFloat(0.500);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==5) {
				earthquake_presen=parseFloat(0.0750);
				flood_persen=parseFloat(0.0750);
				riot_persen=parseFloat(0.0500);
				terror_persen=parseFloat(0.0500);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==6) {
				earthquake_presen=parseFloat(0.0850);
				flood_persen=parseFloat(0.0500);
				riot_persen=parseFloat(0.0350);
				terror_persen=parseFloat(0.0350);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==7) {
				earthquake_presen=parseFloat(0.0750);
				flood_persen=parseFloat(0.0750);
				riot_persen=parseFloat(0.0350);
				terror_persen=parseFloat(0.0350);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==8) {
				earthquake_presen=parseFloat(0.0500);
				flood_persen=parseFloat(0.0500);
				riot_persen=parseFloat(0.0350);
				terror_persen=parseFloat(0.0350);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else if (getColom==9){
				earthquake_presen=parseFloat(0.0500);
				flood_persen=parseFloat(0.0500);
				riot_persen=parseFloat(0.0350);
				terror_persen=parseFloat(0.0350);
				pa_persen=parseFloat(0.5000);
				passenger_persen=parseFloat(0.1000);
			}else{
				earthquake_presen=0;
				flood_persen=0;
				riot_persen=0;
				terror_persen=0;
				pa_persen=0;
				passenger_persen=0;
			}
			
			//medical expanse
			var med_ex_pers;
			if (tipe=='sedan' || tipe=='minibus' ) {
				med_ex_pers=parseFloat(0.0300);
			}else if(tipe=='motor'){
				med_ex_pers=parseFloat(0.1250);
			}else if(tipe=='truck'){
				med_ex_pers=parseFloat(0.2000);
			}else{
				med_ex_pers=0;
			}
			
			era_persen=parseFloat(0.0005);
			personal_ef_persen=parseFloat(0.1000);
			pll_persen=0;
			tpl_persen=0;
			
			//INSERT INTO FORM
			$('.workshop_persen, .compre_persen, .earthquake_presen, .era_persen, .flood_persen, .med_ex_persen, .pa_persen, .passenger_persen, .personal_ef_persen, .pll_persen, .riot_persen, .terror_persen, .tpl_persen').html("");
			$('.workshop_persen').append(workshop_persen+"%");			
			$('.compre_persen').append(compre_persen+"%");			
			$('.earthquake_presen').append(earthquake_presen+"%");			
			$('.era_persen').append(era_persen+"%");			
			$('.flood_persen').append(flood_persen+"%");			
			$('.med_ex_persen').append(med_ex_pers+"%");			
			$('.pa_persen').append(pa_persen+"%");			
			$('.passenger_persen').append(passenger_persen+"%");			
			$('.personal_ef_persen').append(personal_ef_persen+"%");			
			$('.pll_persen').append(pll_persen+"%");			
			$('.riot_persen').append(riot_persen+"%");			
			$('.terror_persen').append(terror_persen+"%");			
			$('.tpl_persen').append(tpl_persen+"%");
			//=========================//END perhitungan rate/persen======================================//
			
			
			
			//=====================premium=================================================================
			var workshop_prem, compre_prem, earthquake_prem, era_prem, flood_prem, med_ex_prem, pa_prem, passenger_prem, personal_ef_prem, pll_prem, riot_prem, terror_prem, tpl_prem;
		
			workshop_prem=0;
			compre_prem=0;			
			earthquake_prem=(((1*(cleanVarTlo*earthquake_presen)/100)*day)/day);
			era_prem=(((1*(cleanVarTlo*era_persen)/100)*day)/day);
			flood_prem=(((1*(cleanVarTlo*flood_persen)/100)*day)/day);
			med_ex_prem=(((1*(cleanMed_ex_val*med_ex_pers)/100)*day)/day);
			pa_prem=(((1*(cleanPa_val*pa_persen)/100)*day)/day);
			passenger_prem=(((1*((parseInt(kapasitas)-1)*cleanPassenger_val*passenger_persen)/100)*day)/day);
			personal_ef_prem=(((1*(0*personal_ef_persen)/100)*day)/day);
			pll_prem=0;
			riot_prem=(((1*(cleanVarTlo*riot_persen)/100)*day)/day);
			terror_prem=(((1*(cleanVarTlo*terror_persen)/100)*day)/day);
			tpl_prem=0;
			
			$('.workshop_prem, .compre_prem, .earthquake_prem, .era_prem, .flood_prem, .med_ex_prem, .pa_prem, .passenger_prem, .personal_ef_prem, .pll_prem, .riot_prem, .terror_prem, .tpl_prem').html("");
			$('.workshop_prem').append(accounting.formatMoney(workshop_prem,'',2,'.',','));			
			$('.compre_prem').append(accounting.formatMoney(compre_prem,'',2,'.',','));			
			$('.earthquake_prem').append(accounting.formatMoney(earthquake_prem,'',2,'.',','));			
			$('.era_prem').append(accounting.formatMoney(era_prem,'',2,'.',','));			
			$('.flood_prem').append(accounting.formatMoney(flood_prem,'',2,'.',','));			
			$('.med_ex_prem').append(accounting.formatMoney(med_ex_prem,'',2,'.',','));			
			$('.pa_prem').append(accounting.formatMoney(pa_prem,'',2,'.',','));			
			$('.passenger_prem').append(accounting.formatMoney(passenger_prem,'',2,'.',','));			
			$('.personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));			
			$('.pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));			
			$('.riot_prem').append(accounting.formatMoney(riot_prem,'',2,'.',','));			
			$('.terror_prem').append(accounting.formatMoney(terror_prem,'',2,'.',','));			
			$('.tpl_prem').append(accounting.formatMoney(tpl_prem,'',2,'.',','));
			
		}//end of function calc_result
	
	
	
		$("#harga").bind('input',function(){
			var text = clearFormat($(this).val());
			if (text > 100000000000) {
			    text = 100000000000;
			}
			
			text = accounting.formatMoney(text,'Rp ',0,'.',',');
			$(this).val(text);
		});
		
		$(this).on('click','#finish-btn',function(){

			var tahun_pembuatan=$('#tahun_pembuatan').val();
			var harga=$('#harga').val();
			var merk=$('#merk').val();
			var model=$('#model').val();
			var regno=$('#regno').val();
			var periode=$('#periode').val();
			var email=$('#email').val();
			var redio1=$('#radio01').val();
			var redio2=$('#radio02').val();
			
			//console.log(tahun_pembuatan+'-'+harga+'-'+model+'-'+regno+'-'+periode+'-'+email+'-'+redio1+'-'+redio2)
			$.ajax({
				"url" : "/savemobilku/",
				"type" : "POST",
				"data" : "tahun_pembuatan=" + tahun_pembuatan +"&harga="+harga+"&merk="+merk+"&model="+model+"&regno="+regno+"&periode="+periode+"&email="+email+"&redio1="+redio1+"&redio2="+redio2,
				"success" : function(response){
					//var getResult=JSON.parse(response);
					//console.log(response);
				}
			});
		});
		
		$(this).on('change','#merk, #model',function(){
			var a=$(this).attr('id');
			if (a=="merk") {
				//code
				a=1;
			}else{
				a=2;
			}
			
			$.ajax({
			       "url" : "/getdatamobil/",
			       "type" : "POST",
			       "data" : "brand=" + $(this).val()+"&attrs="+a,
			       
			       "success" : function(response){
				var getResult=JSON.parse(response);
				if (getResult.type==1) {
					//code
					var i=0;
					$('.model-form').html("");
					$('.model-form').html("<option value=''>Silahkan pilih</option>");
					for(; i<getResult.bodytype.length; i++){
					//console.log(getResult.model_name[i]);
					$('.model-form').append("<option value='"+getResult.model_o_id[i]+"'>"+getResult.model_name[i]+"</option>");
					}
				}else{
					var i=0;
					//$('.model-form').html("");
					//$('.model-form').html("<option value=''>Silahkan pilih</option>");
					for(; i<getResult.bodytype.length; i++){
					$('#tipe').val(getResult.bodytype[i]);
					$('#kapasitas').val(getResult.seatingcapacity[i]);
					}
				}
					
					
				}
			       
			
			});
			
		});
		
		$("#regno").bind('input',function(){
			
			var regno=$(this).val();
			//alert(regno);
			regno.charAt(0);
			regnoChar=regno.charAt(0);
			regnoChar2=regno+regno.charAt(1);
			//alert(regno);
			var wilayah;
			if (regnoChar=='B' ||regnoChar=='CD' ||regnoChar=='D' ||regnoChar=='E' || regnoChar=='F' || regnoChar=='Z') {
				//code
				wilayah=2;
			}else{
				wilayah=3;
				
			}
			$('#wilayah').val(wilayah);

		
		});
		
		$(this).on('click','.btn-next',function(){
			
			var email=$('#email').val();
			if (email != '') {
				calc_result();
			}
		});
		
		$('#myTable').dataTable( {
                        "searching": false,
                        "bLengthChange": false,
                        "paging": false,
                        "info": false
                } );
     
		$('#myTable2').dataTable( {
                        "searching": false,
                        "bLengthChange": false,
                        "paging": false,
                        "info": false
                    } );
		
		$( "#periode" ).datepicker();
		$(".menutab_dekstop li a").width(100);
		$(".menutab_dekstop li a").css("width", "225px");
		$(".tabcontent").css("width", "72%");
		$(".content_show").css("padding", "0px");
           });