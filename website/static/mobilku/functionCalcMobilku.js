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
         $("#jenisasuransi, #jenisasuransi2, #jenisasuransi3, #nojenisasuransi").html("");
         $("#jenisasuransi, #jenisasuransi2, #jenisasuransi3, #nojenisasuransi").append(jenisasuransi.toUpperCase());
    });

    function getBand(price) {
         var si_band;
         if ((price=='')) {
             si_band='S1';
         }else if ((price>0)&&(price<125000000)) {
             si_band='S1';
         }else if ((price>125000000)&&(price<200000000)) {
             si_band='S2';
         }else if ((price>200000000)&&(price<400000000)) {
             si_band='S3';
         }else if ((price>400000000)&&(price<800000000)) {
             si_band='S4';
         }else if((price>800000000)&&(price<1000000000000)) {
             si_band='S5';
         }else{
              si_band='S6';
         }
        return si_band;
    }

    function getTlo(tipe,map,type_mobil,paket) {
        //code
             var rate;
             var tahun_pembuatan=$('#tahun_pembuatan').val();
             var harga=$('#harga').val();
             var merk=$('#merk').val();
             var merk_html=$('#merk option:selected').html().toLowerCase();
             var model=$('#model').val();
             var regno=$('#regno').val();
             var wilayah=$('#wilayah').val();
             var periode=$('#periode').val();
             var nama=$('#nama').val();
             var telp=$('#telp').val();
             var hargaKonv=clearFormat($('#harga').val());
             var model_html=$('#model option:selected').html().toLowerCase();
            //alert($('#radio01').is(":checked"));         
             //if($('#radio01').checked == true){
              if($('#radio01').is(":checked") == true){
                   var radio = $('#radio01').val();
             }else{
                   var radio = $('#radio02').val();
             }
                        
                       

        /*if (tipe=='tlo') {
            if(map=='PK_R1_S1_Sedan'){
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.4700';
                      } 
                      
            }else if (map=='PK_R1_S2_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.4400';
                      } 
                     
            }else if (map=='PK_R1_S3_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.2500';
                      } 
                      rate='0.2900';
            }else if (map=='PK_R1_S4_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.2900';
                      } 
                     
            }else if (map=='PK_R1_S5_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.2400';
                      } 
                      
            }else if (map=='PK_R2_S1_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.6500';
                      } 
                      
            }else if (map=='PK_R2_S2_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                         rate='0.4400';
                      } 
                     
            }else if (map=='PK_R2_S3_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='2.400';
                      }else{
                        rate='0.2900';
                      }
                      
            }else if (map=='PK_R2_S4_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.2500';
                      }                      
            }else if (map=='PK_R2_S5_Sedan') {
                      if(type_mobil=='bmw'){
                         rate='2.400';
                      }else{
                        rate='0.200';
                      }
            }else if (map=='PK_R3_S1_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.3600';
                      } 
                      
            }else if (map=='PK_R3_S2_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.3100';
                      } 
                      
            }else if (map=='PK_R3_S3_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.2900';
                      } 
                      
            }else if (map=='PK_R3_S4_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.0029';
                      } 
                      
            }else if (map=='PK_R3_S5_Sedan') {
                      if(type_mobil=='bmw'){
                        rate='0.2900';
                      }else if(type_mobil=='mercedes benz'){
                        rate='0.2900';
                      }else{
                        rate='0.0024';
                      } 
                     
            }else{
                     rate=0;
            }
        }else{*/
        // console.log('#='+tahun_pembuatan+'-'+harga+'-'+model+'-'+periode+'-'+wilayah+'-'+radio+'-'+hargaKonv+'-'+paket);
           $.ajax({
                  "url" : "/mobilkucalc/",
                  "async": false,
                  "type" : "POST",
                  "data" : "tahun_pembuatan=" + tahun_pembuatan +
                          "&harga="+harga+
                          "&model="+model+
                          "&periode="+periode+
                          "&wilayah="+wilayah+
                          "&radio="+radio+
                          "&hargaKonv="+hargaKonv+
                          "&pakettype="+paket,
                 "success" : function(response){
                        localStorage.setItem("gettlo", response);
                        rate=response;
                        // console.log('retetype='+response);
                 }
             }); 
        //}
        // $('.no_workshop_is_calc').prop('checked', false);
        $( 'table.tbl_ck input[type="checkbox"]' ).each(function(index,value){
                      var datatarget=$(this).attr('data-target');
                      var dataangka=$(this).attr('data-angka');
                      var datainsured=$(this).attr('data-insured');
                      $('.'+datatarget).html('');
                      $('.'+datatarget).append(dataangka);

                      if ( ! this.checked) {
                            //alert(datainsured);
                            $('.'+datainsured).attr('disabled', 'disabled');
                            $('.'+datatarget).html('');
                            $('.'+datatarget).append('0,00');
                      }else{
                            $('.'+datainsured).removeAttr('disabled');
                            $('.'+datatarget).html('');
                            $('.'+datatarget).append(dataangka);
                      }
                      // console.log('tes');
                      totalrecalc_custome();
      });
        return rate;
    }

    function getWorkshop(merk,calc_type) {

        if (calc_type=='1') {//calc_type: Basic,
             if(merk.toLowerCase()=='bmw'){
                workshop_rate='10'
             }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate='10'
             }else{
                workshop_rate='5'
            }
        }else if (calc_type=='2') {//calc_type: standar
             if(merk.toLowerCase()=='bmw'){
                workshop_rate='12.50'
             }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate='15.00'
             }else{
                workshop_rate='7.50'
            }
        }else{
            if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate='25'
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate='20'
            }else{
                workshop_rate='10'
            }
        }
        //console.log("workshop_rate:"+workshop_rate);
        return workshop_rate;

    }

    function getWorkshopNonPack(merk,age) {

        if(age==0){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=15;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=15;
            }else{
                workshop_rate=7.5;
            }
        }else if(age==1){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=15;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=15;
            }else{
                workshop_rate=7.5;
            }
        }else if(age==2){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=15;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=15;
            }else{
                workshop_rate=7.5;
            }
        }else if(age==3){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=15;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=15;
            }else{
                workshop_rate=7.5;
            }
        }else if(age==4){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=20;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=20;
            }else{
                workshop_rate=10;
            }
        }else if(age==5){
           if(merk.toLowerCase()=='bmw'){//calc_type: premier
                workshop_rate=30;
            }else if(merk.toLowerCase()=='mercedes benz'){
                workshop_rate=25;
            }else{
                workshop_rate=15;
            }
        }else{
               workshop_rate=0;
        }
        //console.log("workshop_rate:"+workshop_rate);
        return workshop_rate;

    }

    function calc_result(paket) {
        var getColom;
        var harga=clearFormat($('#harga').val());
        var tahun_pembuatan;
        var model;
        var regno;
        var periode;
        var radio01;
        var merk=$('#merk').val();
        var merk_html=$('#merk option:selected').html().toLowerCase();
        var tipe=$('#tipe').val().toLowerCase();
        var wilayah=parseInt($('#wilayah').val());
        var kapasitas=parseInt($('#kapasitas').val());
        //console.log(merk_html);
        
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
        var personal_ef_val=0;
        var cleanPersonal_ef_val=parseInt(personal_ef_val);
        var pll_val=0;
        var cleanPll_val=parseInt(pll_val);
        
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
        personal_ef_val=accounting.formatMoney(personal_ef_val,'',2,'.',',');
        pll_val=accounting.formatMoney(pll_val,'',2,'.',',');
                
        //INSER INTO FORM paket
        $('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').html("");
        $('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').append(val_tlo);
        $('.med_ex_val, .pa_val, .passenger_val, .tpl_val, .personal_ef_val, .pll_val').html("");
        $('.med_ex_val').append(med_ex_val);
        $('.pa_val').append(pa_val);
        $('.passenger_val').append(passenger_val);
        $('.tpl_val').append(tpl_val);
        //$('.personal_ef_val').append(personal_ef_val);
        //$('.pll_val').append(pll_val);
        $('.personal_ef_val').append("-");
        $('.pll_val').append("-");

        //========================= END perhitungan basic======================================//
        
        
        //=========================//perhitungan rate/persen======================================//
        var hitung, workshop_persen, compre_persen, earthquake_presen, era_persen, flood_persen, med_ex_persen, pa_persen, passenger_persen, personal_ef_persen, pll_persen, riot_persen, terror_persen, tpl_persen;
        var band_id=getBand(cleanVarTlo);

        var tlo=getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1);
        compre_tlo_persen=localStorage.getItem("gettlo");
        hitung = parseFloat(getWorkshop(merk_html,1))*(compre_tlo_persen)/100;
        workshop_persen = hitung.toFixed(4);

        // console.log("compre_tlo_persen : "+(compre_tlo_persen));
        // console.log("getWorkshop parsefloat: "+parseFloat(getWorkshop(merk_html,1)));
        //console.log("Workshop %:"+compre_tlo_persen*(parseFloat(getWorkshop(merk,1))/100));
        console.log("workshop_persen:"+workshop_persen);
        //console.log("compre "+compre_tlo_persen);
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
            pa_persen=parseFloat(0.5000);
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
        personal_ef_persen=parseFloat(1.0000);
        pll_persen=parseFloat(0.5000);

        if (cleanTpl_val >= parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(100000001) && cleanTpl_val < parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(50000001) && cleanTpl_val < parseInt(100000001)){
            tpl_persen=parseFloat(0.5000);
        }else if (cleanTpl_val > parseInt(25000001) && cleanTpl_val < parseInt(50000001)){
            tpl_persen=parseFloat(0.7500);
        }else{
            tpl_persen=parseFloat(1.0000);
        }
        
        //INSERT INTO FORM PAKET
        $('.workshop_persen, .compre_persen, .earthquake_presen, .era_persen, .flood_persen, .med_ex_persen, .pa_persen, .passenger_persen, .personal_ef_persen, .pll_persen, .riot_persen, .terror_persen, .tpl_persen, .totalPremium').html("");
        $('.workshop_persen').append(workshop_persen+"%");
        $('.compre_persen').append(compre_tlo_persen+"%");
        $('.earthquake_presen').append(earthquake_presen+"%");
        $('.era_persen').append(era_persen+"%");
        $('.flood_persen').append(flood_persen+"%");
        $('.med_ex_persen').append(med_ex_pers+"%");
        $('.pa_persen').append(pa_persen+"%");
        $('.passenger_persen').append(passenger_persen+"%");
        //$('.personal_ef_persen').append(personal_ef_persen+"%");
        //$('.pll_persen').append(pll_persen+"%");
        $('.personal_ef_persen').append("-");
        $('.pll_persen').append("-");
        $('.riot_persen').append(riot_persen+"%");
        $('.terror_persen').append(terror_persen+"%");
        $('.tpl_persen').append(tpl_persen+"%");

               //=========================//END perhitungan rate/persen======================================//
        
        
        
        //=====================premium=================================================================
        var workshop_prem, compre_prem, earthquake_prem, era_prem, flood_prem, med_ex_prem, pa_prem, passenger_prem, personal_ef_prem, pll_prem, riot_prem, terror_prem, tpl_prem;
    
        workshop_prem=(((1*(cleanVarTlo*workshop_persen)/100)*day)/day);
        compre_prem=(((1*(cleanVarTlo*compre_tlo_persen)/100)*day)/day);
        earthquake_prem=(((1*(cleanVarTlo*earthquake_presen)/100)*day)/day);
        era_prem=(((1*(cleanVarTlo*era_persen)/100)*day)/day);
        flood_prem=(((1*(cleanVarTlo*flood_persen)/100)*day)/day);
        med_ex_prem=(((1*(cleanMed_ex_val*med_ex_pers)/100)*day)/day);
        pa_prem=(((1*(cleanPa_val*pa_persen)/100)*day)/day);
        passenger_prem=(((1*((parseInt(kapasitas)-1)*cleanPassenger_val*passenger_persen)/100)*day)/day);
        personal_ef_prem=(((1*(cleanPersonal_ef_val*personal_ef_persen)/100)*day)/day);
        pll_prem=(((1*(cleanPll_val*pll_persen)/100)*day)/day);
        riot_prem=(((1*(cleanVarTlo*riot_persen)/100)*day)/day);
        terror_prem=(((1*(cleanVarTlo*terror_persen)/100)*day)/day);
        tpl_prem=(((1*(cleanTpl_val*tpl_persen)/100)*day)/day);
        totalPremium= workshop_prem + compre_prem + earthquake_prem + era_prem + flood_prem + med_ex_prem + pa_prem + passenger_prem + personal_ef_prem + pll_prem + riot_prem + terror_prem + tpl_prem;
        
                    //form paket
        $('.workshop_prem, .compre_prem, .earthquake_prem, .era_prem, .flood_prem, .med_ex_prem, .pa_prem, .passenger_prem, .personal_ef_prem, .pll_prem, .riot_prem, .terror_prem, .tpl_prem').html("");
        $('.workshop_prem').append(accounting.formatMoney(workshop_prem,'',2,'.',','));
        $('.compre_prem').append(accounting.formatMoney(compre_prem,'',2,'.',','));
        $('.earthquake_prem').append(accounting.formatMoney(earthquake_prem,'',2,'.',','));
        $('.era_prem').append(accounting.formatMoney(era_prem,'',2,'.',','));
        $('.flood_prem').append(accounting.formatMoney(flood_prem,'',2,'.',','));
        $('.med_ex_prem').append(accounting.formatMoney(med_ex_prem,'',2,'.',','));
        $('.pa_prem').append(accounting.formatMoney(pa_prem,'',2,'.',','));
        $('.passenger_prem').append(accounting.formatMoney(passenger_prem,'',2,'.',','));
        //$('.personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
        //$('.pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));
        $('.personal_ef_prem').append("-");
        $('.pll_prem').append("-");
        $('.riot_prem').append(accounting.formatMoney(riot_prem,'',2,'.',','));
        $('.terror_prem').append(accounting.formatMoney(terror_prem,'',2,'.',','));
        $('.tpl_prem').append(accounting.formatMoney(tpl_prem,'',2,'.',','));
        $('.totalPremium').append(accounting.formatMoney(totalPremium,'',2,'.',','));

        return totalPremium;
    }//end of function calc_result


    function calc_resultstandard(paket) {
      //alert("alert2");
        var getColom;
        var harga=clearFormat($('#harga').val());
        var tahun_pembuatan;
        var model;
        var regno;
        var periode;
        var radio01;
        var merk=$('#merk').val();
        var merk_html=$('#merk option:selected').html().toLowerCase();
        var tipe=$('#tipe').val().toLowerCase();
        var wilayah=parseInt($('#wilayah').val());
        var kapasitas=parseInt($('#kapasitas').val());
        if($("input[type='radio']#radio01").is(':checked') == true)
          var jenisasuransi = 'comprehensive';
        else
          var jenisasuransi = 'tlo';

        //=========================perhitungan standar======================================//
        var val_tlo=harga*1; //harga dikali tahun pertama (1), tahun kedua dikali 2 dst.
        var cleanVarTlo=parseInt(val_tlo); //get clean tlo
        var med_ex_val=7500000;
        var cleanMed_ex_val=parseInt(med_ex_val); //get clean tlo
        var pa_val=15000000;
        var cleanPa_val=parseInt(pa_val); //get clean tlo
        var passenger_val=15000000;
        var cleanPassenger_val=parseInt(passenger_val); //get clean tlo
        var tpl_val=75000000;
        var cleanTpl_val=parseInt(tpl_val); //get clean tlo
        var personal_ef_val=0;
        var cleanPersonal_ef_val=parseInt(personal_ef_val);
        var pll_val=0;
        var cleanPll_val=parseInt(pll_val);
        
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
        personal_ef_val=accounting.formatMoney(personal_ef_val,'',2,'.',',');
        pll_val=accounting.formatMoney(pll_val,'',2,'.',',');
                
        //INSER INTO FORM
        $('.workshop_val2, .compre_val2, .earthquake_val2, .era_val2, .flood_val2, .riot_val2, .terror_val2').html("");
        $('.workshop_val2, .compre_val2, .earthquake_val2, .era_val2, .flood_val2, .riot_val2, .terror_val2').append(val_tlo);
        $('.med_ex_val2, .pa_val2, .passenger_val2, .tpl_val2, .personal_ef_val2, .pll_val2').html("");
        $('.med_ex_val2').append(med_ex_val);
        $('.pa_val2').append(pa_val);
        $('.passenger_val2').append(passenger_val);
        $('.tpl_val2').append(tpl_val);
        //$('.personal_ef_val2').append(personal_ef_val);
        //$('.pll_val2').append(pll_val);
        $('.personal_ef_val2').append("-");
        $('.pll_val2').append("-");
        //========================= END perhitungan standar======================================//
        
        
        //=========================//perhitungan rate/persen======================================//
        var workshop_persen, compre_persen, earthquake_presen, era_persen, flood_persen, med_ex_persen, pa_persen, passenger_persen, personal_ef_persen, pll_persen, riot_persen, terror_persen, tpl_persen;
        var band_id=getBand(cleanVarTlo);
        
        compre_tlo_persen=getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1);
        workshop_persen=parseFloat(getWorkshop(merk_html,2))*(getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1)/100);

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
            pa_persen=parseFloat(0.5000);
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
            med_ex_pers=parseFloat(0.0250);
        }else if(tipe=='motor'){
            med_ex_pers=parseFloat(0.1250);
        }else if(tipe=='truck'){
            med_ex_pers=parseFloat(0.1750);
        }else{
            med_ex_pers=0;
        }
        
        era_persen=parseFloat(0.0005);
        personal_ef_persen=parseFloat(1.0000);
        pll_persen=parseFloat(0.5000);

        if (cleanTpl_val >= parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(100000001) && cleanTpl_val < parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(50000001) && cleanTpl_val < parseInt(100000001)){
            tpl_persen=parseFloat(0.5000);
        }else if (cleanTpl_val > parseInt(25000001) && cleanTpl_val < parseInt(50000001)){
            tpl_persen=parseFloat(0.7500);
        }else{
            tpl_persen=parseFloat(1.0000);
        }
        
        
        //INSERT INTO FORM
        $('.workshop_persen2, .compre_persen2, .earthquake_presen2, .era_persen2, .flood_persen2, .med_ex_persen2, .pa_persen2, .passenger_persen2, .personal_ef_persen2, .pll_persen2, .riot_persen2, .terror_persen2, .tpl_persen2, .totalPremium2').html("");
        $('.workshop_persen2').append(workshop_persen+"%");
        $('.compre_persen2').append(compre_tlo_persen+"%");
        $('.earthquake_presen2').append(earthquake_presen+"%");
        $('.era_persen2').append(era_persen+"%");
        $('.flood_persen2').append(flood_persen+"%");
        $('.med_ex_persen2').append(med_ex_pers+"%");
        $('.pa_persen2').append(pa_persen+"%");
        $('.passenger_persen2').append(passenger_persen+"%");
        //$('.personal_ef_persen2').append(personal_ef_persen+"%");
        //$('.pll_persen2').append(pll_persen+"%");
        $('.personal_ef_persen2').append("-");
        $('.pll_persen2').append("-");
        $('.riot_persen2').append(riot_persen+"%");
        $('.terror_persen2').append(terror_persen+"%");
        $('.tpl_persen2').append(tpl_persen+"%");
        //=========================//END perhitungan rate/persen======================================//
        
        
        
        //=====================premium=================================================================
        var workshop_prem, compre_prem, earthquake_prem, era_prem, flood_prem, med_ex_prem, pa_prem, passenger_prem, personal_ef_prem, pll_prem, riot_prem, terror_prem, tpl_prem;
    
        workshop_prem=(((1*(cleanVarTlo*workshop_persen)/100)*day)/day);
        compre_prem=(((1*(cleanVarTlo*compre_tlo_persen)/100)*day)/day);
        earthquake_prem=(((1*(cleanVarTlo*earthquake_presen)/100)*day)/day);
        era_prem=(((1*(cleanVarTlo*era_persen)/100)*day)/day);
        flood_prem=(((1*(cleanVarTlo*flood_persen)/100)*day)/day);
        med_ex_prem=(((1*(cleanMed_ex_val*med_ex_pers)/100)*day)/day);
        pa_prem=(((1*(cleanPa_val*pa_persen)/100)*day)/day);
        passenger_prem=(((1*((parseInt(kapasitas)-1)*cleanPassenger_val*passenger_persen)/100)*day)/day);
        personal_ef_prem=(((1*(cleanPersonal_ef_val*personal_ef_persen)/100)*day)/day);
        pll_prem=(((1*(cleanPll_val*pll_persen)/100)*day)/day);
        riot_prem=(((1*(cleanVarTlo*riot_persen)/100)*day)/day);
        terror_prem=(((1*(cleanVarTlo*terror_persen)/100)*day)/day);
        tpl_prem=(((1*(cleanTpl_val*tpl_persen)/100)*day)/day);
        totalPremium= workshop_prem + compre_prem + earthquake_prem + era_prem + flood_prem + med_ex_prem + pa_prem + passenger_prem + personal_ef_prem + pll_prem + riot_prem + terror_prem + tpl_prem;
        
        $('.workshop_prem2, .compre_prem2, .earthquake_prem2, .era_prem2, .flood_prem2, .med_ex_prem2, .pa_prem2, .passenger_prem2, .personal_ef_prem2, .pll_prem2, .riot_prem2, .terror_prem2, .tpl_prem2').html("");
        $('.workshop_prem2').append(accounting.formatMoney(workshop_prem,'',2,'.',','));
        $('.compre_prem2').append(accounting.formatMoney(compre_prem,'',2,'.',','));
        $('.earthquake_prem2').append(accounting.formatMoney(earthquake_prem,'',2,'.',','));
        $('.era_prem2').append(accounting.formatMoney(era_prem,'',2,'.',','));
        $('.flood_prem2').append(accounting.formatMoney(flood_prem,'',2,'.',','));
        $('.med_ex_prem2').append(accounting.formatMoney(med_ex_prem,'',2,'.',','));
        $('.pa_prem2').append(accounting.formatMoney(pa_prem,'',2,'.',','));
        $('.passenger_prem2').append(accounting.formatMoney(passenger_prem,'',2,'.',','));
        //$('.personal_ef_prem2').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
        //$('.pll_prem2').append(accounting.formatMoney(pll_prem,'',2,'.',','));
        $('.personal_ef_prem2').append("-");
        $('.pll_prem2').append("-");
        $('.riot_prem2').append(accounting.formatMoney(riot_prem,'',2,'.',','));
        $('.terror_prem2').append(accounting.formatMoney(terror_prem,'',2,'.',','));
        $('.tpl_prem2').append(accounting.formatMoney(tpl_prem,'',2,'.',','));
        $('.totalPremium2').append(accounting.formatMoney(totalPremium,'',2,'.',','));

        return totalPremium;
        
    }//end of function calc_standard

    function calc_resultpremier(paket) {
        
        var getColom;
        var harga=clearFormat($('#harga').val());
        var tahun_pembuatan;
        var model;
        var regno;
        var periode;
        var radio01;
        var merk=$('#merk').val();
        var merk_html=$('#merk option:selected').html().toLowerCase();

        var tipe=$('#tipe').val().toLowerCase();
        var wilayah=parseInt($('#wilayah').val());
        var kapasitas=parseInt($('#kapasitas').val());
        
        
        //=========================perhitungan premier======================================//
        var val_tlo=harga*1; //harga dikali tahun pertama (1), tahun kedua dikali 2 dst.
        var cleanVarTlo=parseInt(val_tlo); //get clean tlo
        var med_ex_val=7500000;
        var cleanMed_ex_val=parseInt(med_ex_val); //get clean tlo
        var pa_val=15000000;
        var cleanPa_val=parseInt(pa_val); //get clean tlo
        var passenger_val=15000000;
        var cleanPassenger_val=parseInt(passenger_val); //get clean tlo
        var tpl_val=75000000;
        var cleanTpl_val=parseInt(tpl_val); //get clean tlo
        var personal_ef_val=2000000;
        var cleanPersonal_ef_val=parseInt(personal_ef_val);
        var pll_val=25000000;
        var cleanPll_val=parseInt(pll_val);


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
        personal_ef_val=accounting.formatMoney(personal_ef_val,'',2,'.',',');
        pll_val=accounting.formatMoney(pll_val,'',2,'.',',');
                
        //INSER INTO FORM
        $('.workshop_val3, .compre_val3, .earthquake_val3, .era_val3, .flood_val3, .riot_val3, .terror_val3').html("");
        $('.workshop_val3, .compre_val3, .earthquake_val3, .era_val3, .flood_val3, .riot_val3, .terror_val3').append(val_tlo);
        $('.med_ex_val3, .pa_val3, .passenger_val3, .tpl_val3, .personal_ef_val3, .pll_val3').html("");
        $('.med_ex_val3').append(med_ex_val);
        $('.pa_val3').append(pa_val);
        $('.passenger_val3').append(passenger_val);
        $('.tpl_val3').append(tpl_val);
        $('.personal_ef_val3').append(personal_ef_val);
        $('.pll_val3').append(pll_val);
        //========================= END perhitungan premier======================================//
        
        
        //=========================//perhitungan rate/persen======================================//
        var workshop_persen, compre_persen, earthquake_presen, era_persen, flood_persen, med_ex_persen, pa_persen, passenger_persen, personal_ef_persen, pll_persen, riot_persen, terror_persen, tpl_persen;
        var band_id=getBand(cleanVarTlo);
        var calc, calc2, workshop_persen_show
        compre_tlo_persen=getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1);

        calc = parseFloat(getWorkshop(merk_html,3))*(getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1)/100);
        workshop_persen= calc.toFixed(6);

        calc2 = parseFloat(getWorkshop(merk_html,3))*(getTlo(jenisasuransi,'PK_R2_'+band_id+'_Sedan',merk_html,1)/100);
        workshop_persen_show = calc2.toFixed(4);
        
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
            pa_persen=parseFloat(0.5000);
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
            med_ex_pers=parseFloat(0.0250);
        }else if(tipe=='motor'){
            med_ex_pers=parseFloat(0.1250);
        }else if(tipe=='truck'){
            med_ex_pers=parseFloat(0.1750);
        }else{
            med_ex_pers=0;
        }
        
        era_persen=parseFloat(0.0005);
        personal_ef_persen=parseFloat(1.0000);
        pll_persen=parseFloat(0.5000);

        if (cleanTpl_val >= parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(100000001) && cleanTpl_val < parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(50000001) && cleanTpl_val < parseInt(100000001)){
            tpl_persen=parseFloat(0.5000);
        }else if (cleanTpl_val > parseInt(25000001) && cleanTpl_val < parseInt(50000001)){
            tpl_persen=parseFloat(0.7500);
        }else{
            tpl_persen=parseFloat(1.0000);
        }
        
        //INSERT INTO FORM
        $('.workshop_persen3, .compre_persen3, .earthquake_presen3, .era_persen3, .flood_persen3, .med_ex_persen3, .pa_persen3, .passenger_persen3, .personal_ef_persen3, .pll_persen3, .riot_persen3, .terror_persen3, .tpl_persen3, .totalPremium3').html("");
        $('.workshop_persen3').append(workshop_persen_show+"%");
        $('.compre_persen3').append(compre_tlo_persen+"%");
        $('.earthquake_presen3').append(earthquake_presen+"%");
        $('.era_persen3').append(era_persen+"%");
        $('.flood_persen3').append(flood_persen+"%");
        $('.med_ex_persen3').append(med_ex_pers+"%");
        $('.pa_persen3').append(pa_persen+"%");
        $('.passenger_persen3').append(passenger_persen+"%");
        $('.personal_ef_persen3').append(personal_ef_persen+"%");
        $('.pll_persen3').append(pll_persen+"%");
        $('.riot_persen3').append(riot_persen+"%");
        $('.terror_persen3').append(terror_persen+"%");
        $('.tpl_persen3').append(tpl_persen+"%");
        //=========================//END perhitungan rate/persen======================================//
        
        
        
        //=====================premium=================================================================
        var workshop_prem, compre_prem, earthquake_prem, era_prem, flood_prem, med_ex_prem, pa_prem, passenger_prem, personal_ef_prem, pll_prem, riot_prem, terror_prem, tpl_prem;
    
        workshop_prem=(((1*(cleanVarTlo*workshop_persen)/100)*day)/day);
        compre_prem=(((1*(cleanVarTlo*compre_tlo_persen)/100)*day)/day);
        earthquake_prem=(((1*(cleanVarTlo*earthquake_presen)/100)*day)/day);
        era_prem=(((1*(cleanVarTlo*era_persen)/100)*day)/day);
        flood_prem=(((1*(cleanVarTlo*flood_persen)/100)*day)/day);
        med_ex_prem=(((1*(cleanMed_ex_val*med_ex_pers)/100)*day)/day);
        pa_prem=(((1*(cleanPa_val*pa_persen)/100)*day)/day);
        passenger_prem=(((1*((parseInt(kapasitas)-1)*cleanPassenger_val*passenger_persen)/100)*day)/day);
        personal_ef_prem=(((1*(cleanPersonal_ef_val*personal_ef_persen)/100)*day)/day);
        pll_prem=(((1*(cleanPll_val*pll_persen)/100)*day)/day);
        riot_prem=(((1*(cleanVarTlo*riot_persen)/100)*day)/day);
        terror_prem=(((1*(cleanVarTlo*terror_persen)/100)*day)/day);
        tpl_prem=(((1*(cleanTpl_val*tpl_persen)/100)*day)/day);
        totalPremium= workshop_prem + compre_prem + earthquake_prem + era_prem + flood_prem + med_ex_prem + pa_prem + passenger_prem + personal_ef_prem + pll_prem + riot_prem + terror_prem + tpl_prem;
        
        $('.workshop_prem3, .compre_prem3, .earthquake_prem3, .era_prem3, .flood_prem3, .med_ex_prem3, .pa_prem3, .passenger_prem3, .personal_ef_prem3, .pll_prem3, .riot_prem3, .terror_prem3, .tpl_prem3').html("");
        $('.workshop_prem3').append(accounting.formatMoney(workshop_prem,'',2,'.',','));
        $('.compre_prem3').append(accounting.formatMoney(compre_prem,'',2,'.',','));
        $('.earthquake_prem3').append(accounting.formatMoney(earthquake_prem,'',2,'.',','));
        $('.era_prem3').append(accounting.formatMoney(era_prem,'',2,'.',','));
        $('.flood_prem3').append(accounting.formatMoney(flood_prem,'',2,'.',','));
        $('.med_ex_prem3').append(accounting.formatMoney(med_ex_prem,'',2,'.',','));
        $('.pa_prem3').append(accounting.formatMoney(pa_prem,'',2,'.',','));
        $('.passenger_prem3').append(accounting.formatMoney(passenger_prem,'',2,'.',','));
        $('.personal_ef_prem3').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
        $('.pll_prem3').append(accounting.formatMoney(pll_prem,'',2,'.',','));
        $('.riot_prem3').append(accounting.formatMoney(riot_prem,'',2,'.',','));
        $('.terror_prem3').append(accounting.formatMoney(terror_prem,'',2,'.',','));
        $('.tpl_prem3').append(accounting.formatMoney(tpl_prem,'',2,'.',','));
        $('.totalPremium3').append(accounting.formatMoney(totalPremium,'',2,'.',','));
        return totalPremium;
    }//end of function calc_resultpremier

    function recalc_custome(){
        
        var getColom;
        var harga=clearFormat($('#harga').val());
        var tahun_pembuatan=($('#tahun_pembuatan').val());
        var periode=($('#periode').val());
        var piece_periode = periode.split('/');
        var d = piece_periode[2];
        var n = d;
        var ages=n-parseInt(tahun_pembuatan);
        var model;
        var regno;
        var periode;
        var radio01;
        var tipe=$('#tipe').val().toLowerCase();
        var wilayah=parseInt($('#wilayah').val());
        var kapasitas=parseInt($('#kapasitas').val());
        var merk=$('#merk').val();
        var merk_html=$('#merk option:selected').html().toLowerCase();
        
        
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
        var pll_val=0;
        var cleanPll_val=parseInt(pll_val);
        
        
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
        pll_val=accounting.formatMoney(pll_val,'',2,'.',',');

        //INSER INTO FORM NON-paket
        $('.no_workshop_val, .no_compre_val, .no_earthquake_val, .no_flood_val, .no_riot_val, .no_terror_val').html("");
        $('.no_workshop_val, .no_compre_val, .no_earthquake_val, .no_flood_val, .no_riot_val, .no_terror_val').append(val_tlo);
                $('.no_med_ex_val, .no_pa_val, .no_passenger_val, .no_pll_val').html("");
        $('#nopaval').val(pa_val);
        $('#nopassengerval').val(passenger_val);
        $('#notplval').val(tpl_val);
        $('#nomedexval').val(med_ex_val);
        $('#nopllval').val(pll_val);

        
        //========================= END perhitungan basic======================================//
        
        
        //=========================//perhitungan rate/persen======================================//
        var workshop_persen_show, calc, calc2, workshop_persen, compre_persen, earthquake_presen, era_persen, flood_persen, med_ex_persen, pa_persen, passenger_persen, pll_persen, riot_persen, terror_persen, tpl_persen;
        compre_tlo_persen=getTlo(jenisasuransi,'PK_R2_S5_Sedan',merk_html,2);//jenisasuransi, type *ga perlu,merk_html,jenis paket)
        //console.log(parseFloat(getWorkshopNonPack(merk,ages)));
        //console.log(getTlo(jenisasuransi,'PK_R2_S5_Sedan')/100);
        //calc =parseFloat(getWorkshopNonPack(merk_html,ages));
        calc =parseFloat(getWorkshopNonPack(merk_html,ages))*(getTlo(jenisasuransi,'PK_R2_S5_Sedan',merk_html,2)/100);
        // console.log("merk_html="+merk_html+"|"+ages);
        // console.log("1==>"+parseFloat(getWorkshopNonPack(merk_html,ages)));
        // console.log("2==>"+(getTlo(jenisasuransi,'PK_R2_S5_Sedan',merk_html,2)/100));
        workshop_persen_show = calc.toFixed(4);
        workshop_persen = calc.toFixed(6);
        
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
            pa_persen=parseFloat(0.5000);
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
        personal_ef_persen=parseFloat(1.0000);
        
        if (cleanPll_val >= parseInt(100000000000)){
            pll_persen=parseFloat(0.2300);
        }else if (cleanPll_val > parseInt(100000001) && cleanPll_val < parseInt(100000000000)){
            pll_persen=parseFloat(0.2300);
        }else if (cleanPll_val > parseInt(50000001) && cleanPll_val < parseInt(100000001)){
            pll_persen=parseFloat(0.2500);
        }else if (cleanPll_val > parseInt(25000001) && cleanPll_val < parseInt(50000001)){
            pll_persen=parseFloat(0.3750);
        }else if (cleanPll_val < parseInt(25000000)) {
            pll_persen=parseFloat(0.5000);
        }else{
            pll_persen=0;
        }
        
        if (cleanTpl_val >= parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(100000001) && cleanTpl_val < parseInt(100000000000)){
            tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(50000001) && cleanTpl_val < parseInt(100000001)){
            tpl_persen=parseFloat(0.5000);
        }else if (cleanTpl_val > parseInt(25000001) && cleanTpl_val < parseInt(50000001)){
            tpl_persen=parseFloat(0.7500);
        }else{
            tpl_persen=parseFloat(1.0000);
        }

        var no_tpl_persen;
        if (cleanTpl_val >= parseInt(100000000000)){
            no_tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(100000001) && cleanTpl_val < parseInt(100000000000)){
            no_tpl_persen=parseFloat(0.4000);
        }else if (cleanTpl_val > parseInt(50000001) && cleanTpl_val < parseInt(100000001)){
            no_tpl_persen=parseFloat(0.5000);
        }else if (cleanTpl_val > parseInt(25000001) && cleanTpl_val < parseInt(50000001)){
            no_tpl_persen=parseFloat(0.7500);
        }else{
            no_tpl_persen=parseFloat(1.0000);
        }
        
        //INSERT INTO FORM NON PAKT
        $('.no_workshop_persen, .no_compre_persen, .no_earthquake_presen, .no_flood_persen, .no_med_ex_persen, .no_pa_persen, .no_passenger_persen, .no_pll_persen, .no_riot_persen, .no_terror_persen, .no_tpl_persen').html("");
        $('.no_workshop_persen').append(workshop_persen_show+"%");
        $('.no_compre_persen').append(compre_tlo_persen+"%");
        $('.no_earthquake_presen').append(earthquake_presen+"%");
        $('.no_flood_persen').append(flood_persen+"%");
        $('.no_med_ex_persen').append(med_ex_pers+"%");
        $('.no_pa_persen').append(pa_persen+"%");
        $('.no_passenger_persen').append(passenger_persen+"%");
        //$('.no_personal_ef_persen').append(personal_ef_persen+"%");
        //$('.no_pll_persen').append("-");
        $('.no_pll_persen').append(pll_persen+"%");
        $('.no_riot_persen').append(riot_persen+"%");
        $('.no_terror_persen').append(terror_persen+"%");
        $('.no_tpl_persen').append(no_tpl_persen+"%");
        //=========================//END perhitungan rate/persen======================================//
        
        
        
        //=====================premium=================================================================
        var workshop_prem, compre_prem, earthquake_prem, era_prem, flood_prem, med_ex_prem, pa_prem, passenger_prem, pll_prem, riot_prem, terror_prem, tpl_prem;
    
        workshop_prem=(((1*(cleanVarTlo*workshop_persen)/100)*day)/day);
        compre_prem=(((1*(cleanVarTlo*compre_tlo_persen)/100)*day)/day);
        earthquake_prem=(((1*(cleanVarTlo*earthquake_presen)/100)*day)/day);
        era_prem=(((1*(cleanVarTlo*era_persen)/100)*day)/day);
        flood_prem=(((1*(cleanVarTlo*flood_persen)/100)*day)/day);
        med_ex_prem=(((1*(cleanMed_ex_val*med_ex_pers)/100)*day)/day);
        pa_prem=(((1*(cleanPa_val*pa_persen)/100)*day)/day);
        passenger_prem=(((1*((parseInt(kapasitas)-1)*cleanPassenger_val*passenger_persen)/100)*day)/day);
        pll_prem=(((1*(cleanPll_val*pll_persen)/100)*day)/day);
        riot_prem=(((1*(cleanVarTlo*riot_persen)/100)*day)/day);
        terror_prem=(((1*(cleanVarTlo*terror_persen)/100)*day)/day);
        tpl_prem=(((1*(cleanTpl_val*tpl_persen)/100)*day)/day);
        no_tpl_prem=(((1*(cleanTpl_val*no_tpl_persen)/100)*day)/day);
        //totalPremium= workshop_prem + compre_prem + earthquake_prem + era_prem + flood_prem + med_ex_prem + pa_prem + passenger_prem  + pll_prem + riot_prem + terror_prem + tpl_prem;
        
        //form NON Paket
        $('.no_workshop_prem, .no_compre_prem, .no_earthquake_prem, .no_flood_prem, .no_med_ex_prem, .no_pa_prem, .no_passenger_prem, .no_pll_prem, .no_riot_prem, .no_terror_prem, .no_tpl_prem').html("");
        $('.no_workshop_prem').append(accounting.formatMoney(workshop_prem,'',2,'.',','));
        $('.no_compre_prem').append(accounting.formatMoney(compre_prem,'',2,'.',','));
        // console.log("compre_prem="+compre_prem+"*"+compre_tlo_persen);
        $('.no_earthquake_prem').append(accounting.formatMoney(earthquake_prem,'',2,'.',','));
        $('.no_flood_prem').append(accounting.formatMoney(flood_prem,'',2,'.',','));
        $('.no_med_ex_prem').append(accounting.formatMoney(med_ex_prem,'',2,'.',','));
        $('.no_pa_prem').append(accounting.formatMoney(pa_prem,'',2,'.',','));
        $('.no_passenger_prem').append(accounting.formatMoney(passenger_prem,'',2,'.',','));
        //$('.no_personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
        $('.no_pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));
        $('.no_riot_prem').append(accounting.formatMoney(riot_prem,'',2,'.',','));
        $('.no_terror_prem').append(accounting.formatMoney(terror_prem,'',2,'.',','));
        $('.no_tpl_prem').append(accounting.formatMoney(tpl_prem,'',2,'.',','));
		$('#no_tpl_hidden').val(tpl_prem);
		$('#no_pll_hidden').val(pll_prem);
		$('#med_ex_hidden').val(med_ex_prem);
		$('#no_passenger_hidden').val(passenger_prem);
		$('#no_pa_hidden').val(pa_prem);
        //$('.no_totalPremium').append(accounting.formatMoney(parseInt(totalPremium-era_prem),'',2,'.',','));

                $('.no_compre_is_calc').attr('data-angka',accounting.formatMoney(compre_prem,'',2,'.',','));
                $('.no_earthquake_is_calc').attr('data-angka',accounting.formatMoney(earthquake_prem,'',2,'.',','));
        $('.no_flood_is_calc').attr('data-angka',accounting.formatMoney(flood_prem,'',2,'.',','));
        $('.no_med_ex_is_calc').attr('data-angka',accounting.formatMoney(med_ex_prem,'',2,'.',','));
        $('.no_pa_is_calc').attr('data-angka',accounting.formatMoney(pa_prem,'',2,'.',','));
        $('.no_passenger_is_calc').attr('data-angka',accounting.formatMoney(passenger_prem,'',2,'.',','));
        //$('.no_personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
        //$('.no_pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));
        $('.no_riot_is_calc').attr('data-angka',accounting.formatMoney(riot_prem,'',2,'.',','));
        $('.no_terror_is_calc').attr('data-angka',accounting.formatMoney(terror_prem,'',2,'.',','));
        $('.no_tpl_is_calc').attr('data-angka',accounting.formatMoney(tpl_prem,'',2,'.',','));
                $('.no_workshop_is_calc').attr('data-angka',accounting.formatMoney(workshop_prem,'',2,'.',','));

      return totalrecalc_custome(); 
    }
    
      function totalrecalc_custome(){

        /*
        var no_workshop_prem=(parseInt(clearFormat($('.no_workshop_prem').html().replace(',00',''))));
        var no_compre_prem=(parseInt(clearFormat($('.no_compre_prem').html().replace(',00',''))));
        var no_earthquake_prem=(parseInt(clearFormat($('.no_earthquake_prem').html().replace(',00',''))));
        var no_flood_prem=(parseInt(clearFormat($('.no_flood_prem').html().replace(',00',''))));
        var no_med_ex_prem=(parseInt(clearFormat($('.no_med_ex_prem').html().replace(',00',''))));
        var no_pa_prem=(parseInt(clearFormat($('.no_pa_prem').html().replace(',00',''))));
        var no_passenger_prem=(parseInt(clearFormat($('.no_passenger_prem').html().replace(',00',''))));
        var no_pll_prem=(parseInt(clearFormat($('.no_pll_prem').html().replace(',00',''))));
        var no_riot_prem=(parseInt(clearFormat($('.no_riot_prem').html().replace(',00',''))));
        var no_terror_prem=(parseInt(clearFormat($('.no_terror_prem').html().replace(',00',''))));
        var no_tpl_prem=(parseInt(clearFormat($('.no_tpl_prem').html().replace(',00',''))));
        */
        var no_workshop_prem=(parseFloat(($('.no_workshop_prem').html().split('.').join("")).replace(",",".")));
        var no_compre_prem=(parseFloat(($('.no_compre_prem').html().split('.').join("")).replace(",",".")));
        var no_earthquake_prem=(parseFloat(($('.no_earthquake_prem').html().split('.').join("")).replace(",",".")));
        var no_flood_prem=(parseFloat(($('.no_flood_prem').html().split('.').join("")).replace(",",".")));
        var no_med_ex_prem=(parseFloat(($('.no_med_ex_prem').html().split('.').join("")).replace(",",".")));
        var no_pa_prem=(parseFloat(($('.no_pa_prem').html().split('.').join("")).replace(",",".")));
        var no_passenger_prem=(parseFloat(($('.no_passenger_prem').html().split('.').join("")).replace(",",".")));
        var no_pll_prem=(parseFloat(($('.no_pll_prem').html().split('.').join("")).replace(",",".")));
        var no_riot_prem=(parseFloat(($('.no_riot_prem').html().split('.').join("")).replace(",",".")));
        var no_terror_prem=(parseFloat(($('.no_terror_prem').html().split('.').join("")).replace(",",".")));
        var no_tpl_prem=(parseFloat(($('.no_tpl_prem').html().split('.').join("")).replace(",",".")));
        // console.log(parseInt(clearFormat($('.no_workshop_prem').html().replace(',00',''))));
        // console.log(parseInt(clearFormat($('.no_compre_prem').html().replace(',00',''))));
        // console.log(parseInt(clearFormat($('.no_earthquake_prem').html().replace(',00',''))));
        // console.log(parseInt(clearFormat($('.no_flood_prem').html().replace(',00',''))));
        // console.log(parseInt(clearFormat($('.no_med_ex_prem').html().replace(',00',''))));
        var no_totalPremium=parseFloat(no_workshop_prem+no_compre_prem+no_earthquake_prem+no_flood_prem+no_med_ex_prem+no_pa_prem+no_passenger_prem+no_riot_prem+no_terror_prem+no_tpl_prem+no_pll_prem);
        console.log($('.no_workshop_prem').html()+$('.no_compre_prem').html()+$('.no_earthquake_prem').html()+$('.no_flood_prem').html()+$('.no_med_ex_prem').html()+$('.no_pa_prem').html()+$('.no_passenger_prem').html()+$('.no_pll_prem').html()+$('.no_riot_prem').html()+$('.no_terror_prem').html()+$('.no_tpl_prem').html());
        console.log(no_workshop_prem);
        console.log("workshop : "+no_workshop_prem);
        $('.no_totalPremium').html('');
        $('.no_totalPremium').append(accounting.formatMoney(no_totalPremium,'',2,'.',','));
        return no_totalPremium;

    }

    function notpl(){
        //get total day in a year
        var now = new Date(2015,1,0);
        var start = new Date(now.getFullYear(),12, 31);
        var diff = start-now;
        var oneDay = 1000 * 60 * 60 * 24;
        var day = Math.ceil(diff / oneDay);

        var no_tpl_val= $("#notplval").val();
        var rNotpl_val = no_tpl_val.replace(',00','');
        var cleanNotpl_val = parseInt(clearFormat(rNotpl_val));
        
        var no_tpl_persen;
        if (cleanNotpl_val >= parseInt(100000000000)){
            no_tpl_persen=parseFloat(0.4000);
        }else if (cleanNotpl_val > parseInt(100000001) && cleanNotpl_val < parseInt(100000000000)){
            no_tpl_persen=parseFloat(0.4000);
        }else if (cleanNotpl_val > parseInt(50000001) && cleanNotpl_val < parseInt(100000001)){
            no_tpl_persen=parseFloat(0.5000);
        }else if (cleanNotpl_val > parseInt(25000001) && cleanNotpl_val < parseInt(50000001)){
            no_tpl_persen=parseFloat(0.7500);
        }else{
            no_tpl_persen=parseFloat(1.0000);
        }

        $('.no_tpl_persen').html("");
        $('.no_tpl_persen').append(no_tpl_persen+"%");
        var no_tpl_prem=(((1*(cleanNotpl_val*no_tpl_persen)/100)*day)/day);
        $('.no_tpl_prem').html("");
        $('.no_tpl_prem').append(accounting.formatMoney(no_tpl_prem,'',2,'.',','));

        totalrecalc_custome();

    }

    function nomedex(){

        var tipe=$('#tipe').val().toLowerCase();
        var wilayah=parseInt($('#wilayah').val());
        var kapasitas=parseInt($('#kapasitas').val());

        //get total day in a year
        var now = new Date(2015,1,0);
        var start = new Date(now.getFullYear(),12, 31);
        var diff = start-now;
        var oneDay = 1000 * 60 * 60 * 24;
        var day = Math.ceil(diff / oneDay);

        var no_med_ex_val= $("#nomedexval").val();
        var rNomedex_val = no_med_ex_val.replace(',00','');
        var cleanNomedex_val = parseInt(clearFormat(rNomedex_val));
        
        //medical expanse
        var med_ex_pers;
        if (tipe=='sedan' || tipe=='minibus' ) {
            if (cleanNomedex_val >= parseInt(100000000000)){
                med_ex_pers=parseFloat(0.0200);
            }else if (cleanNomedex_val > parseInt(10000001) && cleanNomedex_val < parseInt(100000000000)){
                med_ex_pers=parseFloat(0.0200);
            }else if (cleanNomedex_val > parseInt(5000001) && cleanNomedex_val < parseInt(10000001)){
                med_ex_pers=parseFloat(0.0250);
            }else if (cleanNomedex_val > parseInt(2500001) && cleanNomedex_val < parseInt(5000001)){
                med_ex_pers=parseFloat(0.0300);
            }else if (cleanNomedex_val > parseInt(0) && cleanNomedex_val < parseInt(2500001)){
                med_ex_pers=parseFloat(0.0350);
            }else{
                med_ex_pers=parseFloat(0);
            }
        }else if(tipe=='motor'){
            if (cleanNomedex_val >= parseInt(100000000000)){
                med_ex_pers=parseFloat(0.1210);
            }else if (cleanNomedex_val > parseInt(10000001) && cleanNomedex_val < parseInt(100000000000)){
                med_ex_pers=parseFloat(0.1210);
            }else if (cleanNomedex_val > parseInt(5000001) && cleanNomedex_val < parseInt(10000001)){
                med_ex_pers=parseFloat(0.1250);
            }else if (cleanNomedex_val > parseInt(2500001) && cleanNomedex_val < parseInt(5000001)){
                med_ex_pers=parseFloat(0.1250);
            }else if (cleanNomedex_val > parseInt(0) && cleanNomedex_val < parseInt(2500001)){
                med_ex_pers=parseFloat(0.1500);
            }else{
                med_ex_pers=parseFloat(0);
            }
        }else if(tipe=='truck'){
            if (cleanNomedex_val >= parseInt(100000000000)){
                med_ex_pers=parseFloat(0.1650);
            }else if (cleanNomedex_val > parseInt(10000001) && cleanNomedex_val < parseInt(100000000000)){
                med_ex_pers=parseFloat(0.1650);
            }else if (cleanNomedex_val > parseInt(5000001) && cleanNomedex_val < parseInt(10000001)){
                med_ex_pers=parseFloat(0.1750);
            }else if (cleanNomedex_val > parseInt(2500001) && cleanNomedex_val < parseInt(5000001)){
                med_ex_pers=parseFloat(0.0200);
            }else if (cleanNomedex_val > parseInt(0) && cleanNomedex_val < parseInt(2500001)){
                med_ex_pers=parseFloat(0.0300);
            }else{
                med_ex_pers=parseFloat(0);
            }
        }else{
            med_ex_pers=0;
        }
     
        $('.no_med_ex_persen').html("");
        $('.no_med_ex_persen').append(med_ex_pers+"%");
        var no_med_ex_prem=(((1*(cleanNomedex_val*med_ex_pers)/100)*day)/day);
        $('.no_med_ex_prem').html("");
        $('.no_med_ex_prem').append(accounting.formatMoney(no_med_ex_prem,'',2,'.',','));

        totalrecalc_custome();

    }

    function padriver(){
        var getColom;
        //get total day in a year
        var now = new Date(2015,1,0);
        var start = new Date(now.getFullYear(),12, 31);
        var diff = start-now;
        var oneDay = 1000 * 60 * 60 * 24;
        var day = Math.ceil(diff / oneDay);
        var wilayah=parseInt($('#wilayah').val());

        var no_pa_val= $("#nopaval").val();
        var rNopa_val = no_pa_val.replace(',00','');
        var cleanNopa_val = parseInt(clearFormat(rNopa_val));
        
        var workshop_persen, compre_persen, earthquake_presen, flood_persen, pa_persen, passenger_persen,  riot_persen, terror_persen;
        workshop_persen=0;
        compre_persen=0;
        
        // if (tlo= 5+wilayah) else (1+wilayah)
        if (jenisasuransi=='tlo') {
            getColom=wilayah+5;
        }else{
            getColom=wilayah+1;
        }
        
        if (getColom==2) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==3) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==4) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==5) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==6) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==7) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==8) {
            pa_persen=parseFloat(0.5000);
        }else if (getColom==9){
            pa_persen=parseFloat(0.5000);
        }else{
            pa_persen=0;
        }

        $('.no_pa_persen').html("");
        $('.no_pa_persen').append(pa_persen+"%");
        var pa_prem=(((1*(cleanNopa_val*pa_persen)/100)*day)/day);
        $('.no_pa_prem').html("");
        $('.no_pa_prem').append(accounting.formatMoney(pa_prem,'',2,'.',','));

        totalrecalc_custome();

    }

    function papassenger(){
        var getColom;
        //get total day in a year
        var now = new Date(2015,1,0);
        var start = new Date(now.getFullYear(),12, 31);
        var diff = start-now;
        var oneDay = 1000 * 60 * 60 * 24;
        var day = Math.ceil(diff / oneDay);
        var wilayah=parseInt($('#wilayah').val());

        var no_passenger_val= $("#nopassengerval").val();
        var rNopassenger_val = no_passenger_val.replace(',00','');
        var cleanNopassenger_val = parseInt(clearFormat(rNopassenger_val));
        
        var workshop_persen, compre_persen, earthquake_presen, flood_persen, pa_persen, passenger_persen,  riot_persen, terror_persen;
        workshop_persen=0;
        compre_persen=0;
        
        // if (tlo= 5+wilayah) else (1+wilayah)
        if (jenisasuransi=='tlo') {
            getColom=wilayah+5;
        }else{
            getColom=wilayah+1;
        }
        
        if (getColom==2) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==3) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==4) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==5) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==6) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==7) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==8) {
            passenger_persen=parseFloat(0.1000);
        }else if (getColom==9){
            passenger_persen=parseFloat(0.1000);
        }else{
            passenger_persen=0;
        }

        $('.no_passenger_persen').html("");
        $('.no_passenger_persen').append(passenger_persen+"%");
        var no_passenger_prem=(((1*(cleanNopassenger_val*passenger_persen)/100)*day)/day);
        $('.no_passenger_prem').html("");
        $('.no_passenger_prem').append(accounting.formatMoney(no_passenger_prem,'',2,'.',','));

        totalrecalc_custome();

    }

    function ppl(){
        var now = new Date(2015,1,0);
        var start = new Date(now.getFullYear(),12, 31);
        var diff = start-now;
        var oneDay = 1000 * 60 * 60 * 24;
        var day = Math.ceil(diff / oneDay);
        var wilayah=parseInt($('#wilayah').val());

        $('#nopllval').val();
        var no_pll_val= $("#nopllval").val();
        var rNopll_val = no_pll_val.replace(',00','');
        var cleanNopll_val = parseInt(clearFormat(rNopll_val));
        
        if (cleanNopll_val >= parseInt(100000000000)){
            pll_persen=parseFloat(0.2300);
        }else if (cleanNopll_val > parseInt(100000001) && cleanNopll_val < parseInt(100000000000)){
            pll_persen=parseFloat(0.2300);
        }else if (cleanNopll_val > parseInt(50000001) && cleanNopll_val < parseInt(100000001)){
            pll_persen=parseFloat(0.2500);
        }else if (cleanNopll_val > parseInt(25000001) && cleanNopll_val < parseInt(50000001)){
            pll_persen=parseFloat(0.3750);
        }else if (cleanNopll_val < parseInt(25000000)) {
            pll_persen=parseFloat(0.5000);
        }else{
            pll_persen=0;
        }
        
        $('.no_pll_persen').html("");
        $('.no_pll_persen').append(pll_persen+"%");
        var pll_prem=(((1*(cleanNopll_val*pll_persen)/100)*day)/day);
        $('.no_pll_prem').html("");
        $('.no_pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));

        totalrecalc_custome();
    }

    $("#harga").bind('input',function(){
        var text = clearFormat($(this).val());
        if (text > 100000000000) {
            text = 100000000000;
        }
        if(text != 0){
          text = accounting.formatMoney(text,'Rp ',0,'.',',');
        }else{
          text = '';
        }
        
        $(this).val(text);
    });


    $("#nopassengerval, #nopaval, #notplval, #nomedexval, #nopllval").bind('input',function(){
        var text1 = clearFormat($(this).val());
        if (text1 > 100000000000) {
            text1 = 100000000000;
        }
        
        text1 = accounting.formatMoney(text1,'',0,'.',',');
        $(this).val(text1);

        notpl();
        nomedex();
        padriver();
        papassenger();
        ppl();
    });

    /*$("#nomedexval").bind('input',function(){
        var text2 = clearFormat($(this).val());
        if (text2 > 100000000000) {
            text2 = 100000000000;
        }
        
        text2 = accounting.formatMoney(text2,'',0,'.',',');
        $(this).val(text2);

        nomedex();
    });

    $("#nopllval").bind('input',function(){
        var text3 = clearFormat($(this).val());
        if (text3 > 100000000000) {
            text3 = 100000000000;
        }
        
        text3 = accounting.formatMoney(text3,'',0,'.',',');
        $(this).val(text3);
    });*/
    
    $(this).on('click','#finish-btn',function(){
//alert("alert3");
        // var tahun_pembuatan=$('#tahun_pembuatan').val();
        // var harga=$('#harga').val();
        // var merk=$('#merk').val();
        // var merk_html=$('#merk option:selected').html().toLowerCase();
        // var model=$('#model').val();
        // var regno=$('#regno').val();
        // var periode=$('#periode').val();
        // var email=$('#email').val();
        // var nama=$('#nama').val();
        // var telp=$('#telp').val();
        // var hargaKonv=clearFormat($('#harga').val());
        // var model_html=$('#model option:selected').html().toLowerCase();
        
        // //var radio1=$('#radio01').val();
        // //var radio2=$('#radio02').val();
        // //$('#radio01').checked
        // if($('#radio01').is(":checked") == true){
        //     var radio = $('#radio01').val();
        // }else{
        //     var radio = $('#radio02').val();
        // }
        
        // //console.log(tahun_pembuatan+'-'+harga+'-'+model+'-'+regno+'-'+periode+'-'+email+'-'+nama+'-'+telp)
        // $.ajax({
        //     "url" : "/savemobilku/",
        //     "type" : "POST",
        //     "data" : "tahun_pembuatan=" + tahun_pembuatan +"&harga="+harga+"&merk="+merk+"&model="+model+"&regno="+regno+"&periode="+periode+"&email="+email+"&nama="+nama+"&telp="+telp+"&radio="+radio+"&hargaKonv="+hargaKonv+"&merk_html="+merk_html+"&model_html="+model_html,
        //     "success" : function(){
        //         //var getResult=JSON.parse(response);
        //         //console.log(response);
        //     }
        // });
        window.history.go('/kalkulator/tasbih');
    });

//edit by diah 20 Agustus 2015
    
    // $(this).on('change','#merk, #model',function(){
    //     var a=$(this).attr('id');
        
        // if (a=="merk") {
        //     //code
        //     alert(a);
        //     a=1;
        // }else{
        //     alert(a);
        //     a=2;
        // }
        
        // $.ajax({
        //        "url" : "/getdatamobil/",
        //        "type" : "POST",
        //        "data" : "brand=" + $(this).val()+"&attrs="+a,
               
        //        "success" : function(response){
        //                 var getResult=JSON.parse(response);
        //                 if (getResult.type==1) {
        //                     //code
        //                     var i=0;
        //                     $('.model-form').html("");
        //                     $('.model-form').html("<option value=''>Silahkan pilih</option>");
        //                     for(; i<getResult.bodytype.length; i++){
        //                     //console.log(getResult.model_name[i]);
        //                     $('.model-form').append("<option value='"+getResult.model_o_id[i]+"'>"+getResult.model_name[i]+"</option>");
        //                     }
        //                 }else{
        //                     var i=0;
        //                     //$('.model-form').html("");
        //                     //$('.model-form').html("<option value=''>Silahkan pilih</option>");
        //                     for(; i<getResult.bodytype.length; i++){
        //                     $('#tipe').val(getResult.bodytype[i]);
        //                     $('#kapasitas').val(getResult.seatingcapacity[i]);
        //                     }
        //                 }
                
                
        //     }
               
        
        // });
    // });
    
    //pindah ke sini
  
   function sendEmail(basic, standar, premier, non){
        var tahun_pembuatan=$('#tahun_pembuatan').val();
        var harga=$('#harga').val();
        var merk=$('#merk').val();
        var merk_html=$('#merk option:selected').html().toLowerCase();
        // var merk_html = 'Alfa Romeo';
        var model=$('#model').val();
        var regno=$('#regno').val();
        var periode=$('#periode').val();
        var email=$('#email').val();
        var nama=$('#nama').val();
        var telp=$('#telp').val();
        var hargaKonv=clearFormat($('#harga').val());
        var model_html=$('#model option:selected').html().toLowerCase();
        
        var radio1=$('#radio01').val();
        var radio2=$('#radio02').val();
        $('#radio01').checked
        if($('#radio01').is(":checked") == true){
            var radio = $('#radio01').val();
        }else{
            var radio = $('#radio02').val();
        }
        
        //console.log(tahun_pembuatan+'-'+harga+'-'+model+'-'+regno+'-'+periode+'-'+email+'-'+nama+'-'+telp)
        $.ajax({
            "url" : "/savemobilku/",
            "type" : "POST",
            "async" : false,
            "data" : "tahun_pembuatan=" + tahun_pembuatan +"&harga="+harga+"&merk="+merk+"&model="+model+"&regno="+regno+"&periode="+periode+"&email="+email+"&nama="+nama+"&telp="+telp+"&radio="+radio+"&hargaKonv="+hargaKonv+"&merk_html="+merk_html+"&model_html="+model_html+"&basic=" + basic +"&standar="+standar+"&premier="+premier+"&non="+non,
            "success" : function(){
                //var getResult=JSON.parse(response);
                //console.log(response);
            }
        });
   }

    
    $(this).on('click','.btn-next',function(){
        
        var email=$('#email').val();
        if (email != '') {
            sendEmail(calc_result(),calc_resultstandard(),calc_resultpremier(),recalc_custome());
            adjustTable();
        }
    });

    function sendEmailFinish(){
      if(document.getElementById("paket_2_1").checked){
        var compre = $('.no_compre_prem.data').html();
        var tpl = $('.no_tpl_prem.data').html();
        var pll = $('.no_pll_prem.data').html();
        var med = $('.no_med_ex_prem.data').html();
        var flood = $('.no_flood_prem.data').html();
        var earthquake = $('.no_earthquake_prem.data').html();
        var riot = $('.no_riot_prem.data').html();
        var terror = $('.no_terror_prem.data').html();
        var passenger = $('.no_passenger_prem.data').html();
        var pa = $('.no_pa_prem.data').html();
        var workshop = $('.no_workshop_prem.data').html();
        var total = $('.no_totalPremium.data').html();
        var label = $('.no_pack.data').html();
        var email=$('#email').val();
        console.log(compre+' - '+tpl+' - '+pll+' - '+med+' - '+flood+' - '+earthquake+' - '+riot+' - '+terror+' - '+passenger+' - '+pa+' - '+workshop+' - '+total+' - '+label+' - '+email);
        $.ajax({
            "url" : "/save/",
            "type" : "POST",
            "async" : false,
            "data" : "compre="+compre+"&tpl="+tpl+"&pll="+pll+"&med="+med+"&flood="+flood+"&earthquake="+earthquake+"&riot="+riot+"&terror="+terror+"&passenger="+passenger+"&pa="+pa+"&workshop="+workshop+"&total="+total+"&label="+label+"&email="+email,
            "success" : function(){
              window.open('/kalkulator/thankyou-mobilku','_self');
              console.log(data);
                //var getResult=JSON.parse(response);
                //console.log(response);
            }
            // console.log(data);
        });
        // console.log(compre+'-'+tpl+'-'+pll+'-'+med+'-'+flood+'-'+earthquake+'-'+riot+'-'+terror+'-'+passenger+'-'+pa+'-'+workshop+'-'+total);
      }else{
        window.open('/kalkulator/thankyou-mobilku','_self');
      }
       
   }

    $("#finish-btn").on('click', function(){
        sendEmailFinish();
    });
         
    /*$('#myTable2,#myTable3,#myTable4,#myTable5').dataTable( {
        "searching": false,
        "bLengthChange": false,
        "paging": false,
        "info": false,
        "responsive": true
    });*/



    $( 'table.tbl_ck input[type="checkbox"]' ).each(function(index,value){
            $(this).click(function() {
                    var datatarget=$(this).attr('data-target');
                    var dataangka=$(this).attr('data-angka');
                    var datainsured=$(this).attr('data-insured');
                    $('.'+datatarget).html('');
                    $('.'+datatarget).append(dataangka);

                    if ( ! this.checked) {
                          //alert(datainsured);
                          $('.'+datainsured).attr('disabled', 'disabled');
                          $('.'+datatarget).html('');
                          $('.'+datatarget).append('0,00');
                    }else{
                          $('.'+datainsured).removeAttr('disabled');
                          $('.'+datatarget).html('');
                          $('.'+datatarget).append(dataangka);
                    }
                    totalrecalc_custome();

            });

            //cekboxnya on klik
            //nanti $( #data-target).html( $this.attr( data-angka ) )
    });

    /*$( 'table.tbl_ck input[id="no_tpl_is_calc"]' ).each(function(index,value){
            $(this).click(function() {
                    var datatarget=$(this).attr('data-target');
                    var dataangka=$(this).attr('data-angka');
                    $('.'+datatarget).html('');
                    $('.'+datatarget).append(dataangka);

                    if ( ! this.checked) {
                          $('.'+datatarget).html('');
                          $('.'+datatarget).append('0,00');
                    }else{
                          $('.'+datatarget).html('');
                          $('.'+datatarget).append(dataangka);
                    }
                    totalrecalc_custome();

            });

            //cekboxnya on klik
            //nanti $( #data-target).html( $this.attr( data-angka ) )
    });
    $(document).ready(function(){
        if($('#no_tpl_is_calc').is(":checked") == true){
            $("#notplval").prop("disabled",false);
        }else{
            $("#notplval").prop("disabled",true);
        }
    })*/



    /*
    $(".menutab_dekstop li a").width(100);
    $(".menutab_dekstop li a").css("width", "225px");
    $(".tabcontent").css("width", "72%");
    */
    $(".content_show").css("padding", "0px");
});
