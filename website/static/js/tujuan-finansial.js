$(document).ready(function(){
   
   $('.nd').hide();
   
   $('.selanjutnya').click(function(){
      var content1 = $('.content-profil').height();
      
      
      var cat = $('.soal6:checked').val();
      if (cat=="dd") {
         $('.nd').hide();
         $('.dana-darurat').show(); 
      }
      else if (cat=="dp") {
         $('.nd').hide();
         $('.dana-pensiun').show(); 
      }
      else if (cat=="pa") {
         $('.nd').hide();
         $('.dana-pendidikan').show(); 
      }
      var container = $('.items-container').height();
      $('.desc-fin').empty();
      var content2 = $('.content-profil').height();
      var real_height = content2-content1;
      $('.items-container').css('height', container+real_height+'px');
      $(this).siblings('.nd').find('table td span').text('');
      $(this).siblings('.nd').find('input[type=radio]').prop('checked', false);
      $(this).siblings('.nd').find('input[type=text]').val('');
   });
   
   $('.calculate').click(function(){
        var soal = [];
        var content1 = $('.content-profil').height();
        
        for (var i=1; i<=6; i++) {
            soal[i] = $('.soal'+i+':checked').val();
        }
        
        function commaSeparateNumber(val){
          while (/(\d+)(\d{3})/.test(val.toString())){
            val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
          }
          return val;
         }
        
        var pilihan = $('.member-polis:selected').val();
        
        if (soal[6]=='dd') {
         var dana_darurat = $('.dana_darurat').val();
         var lama_waktu = $('.lama_waktu').val();
         var inflasi = $('.dd_inf:checked').val();
         var kembalian = $('.dd_kembali:checked').val();
         
            $.ajax({
                url: "allianz-tujuan-finansial-form.php",
                type: "POST",
                data: {
                    member:pilihan,
                    soal1:soal[1],
                    soal2:soal[2],
                    soal3:soal[3],
                    soal4:soal[4],
                    soal5:soal[5],
                    soal6:soal[6],
                    dd:dana_darurat,
                    lama:lama_waktu,
                    inflasi:inflasi,
                    kembalian:kembalian
                },
                success:function(result){
                    var hasil = $.parseJSON(result);
                    var html = hasil.item1+'<br />';
                    html += hasil.item2+'<br />';
                    html += "<b>"+hasil.item3+"</b>";
                    
                   $('.desc-fin').empty();
                   $('.desc-fin').append(html);
                    
                      $('.isi_dd').text(commaSeparateNumber(dana_darurat));
                      $('.jangka_waktu_dd').text(lama_waktu);
                      $('.tingkat_kembali_dd').text(kembalian);
                      $('.asumsi_inflasi_dd').text(inflasi);
                      $('.fv_dd').text(hasil.FV);
                      $('.pmt_dd').text(hasil.PMT);
                      $('.perbulan_dd').text(hasil.PMT_bulan);
                    
                    var container = $('.items-container').height();
                    var content2 = $('.content-profil').height();
                    var real_height = content2-content1;
                    $('.items-container').css('height', container+real_height+'px');
                }
            });
            }
            
         if (soal[6]=='dp') {
            var dana_keluar = $('.dana_keluar').val();
            var lama_waktu_pensiun = $('.lama_waktu_pensiun').val();
            var dp_inf = $('.dp_inf:checked').val();
            var dp_inv = $('.dp_inv:checked').val();
            var lama_menikmati = $('.lama_menikmati').val();
               
            $.ajax({
                url: "allianz-tujuan-finansial-form.php",
                type: "POST",
                data: {
                    member:pilihan,
                    soal1:soal[1],
                    soal2:soal[2],
                    soal3:soal[3],
                    soal4:soal[4],
                    soal5:soal[5],
                    soal6:soal[6],
                    dp:dana_keluar,
                    lama_pensiun:lama_waktu_pensiun,
                    inflasi:dp_inf,
                    investasi: dp_inv,
                    lama_menikmati:lama_menikmati
                },
                success:function(result){
                    var hasil = $.parseJSON(result);
                    var html = hasil.item1+'<br />';
                    html += hasil.item2+'<br />';
                    html += "<b>"+hasil.item3+"</b>";
                    
                   $('.desc-fin').empty();
                   $('.desc-fin').append(html);
                    
                      $('.pv_dp').text(dana_keluar);
                      $('.jangka_waktu_dp').text(lama_waktu_pensiun);
                      $('.inflasi_dp').text(dp_inf+'%');
                      $('.fv_dp').text(commaSeparateNumber(hasil.FV));
                      $('.pmt_dp').text(commaSeparateNumber(hasil.FV));
                      $('.investasi_dp1').text(dp_inv+'%');
                      $('.investasi_dp2').text((dp_inv-dp_inf)+'%');
                      $('.masa_pensiun_dp').text(lama_menikmati);
                      $('.pvad_dp').text(commaSeparateNumber(hasil.PVAD));
                      $('.defisit_dp').text(commaSeparateNumber(hasil.PVAD));
                      $('.pmt_dp_pertahun').text(commaSeparateNumber(hasil.PMT));
                      $('.pmt_dp_perbulan').text(commaSeparateNumber(hasil.PMT_bulan));
                    
                    var container = $('.items-container').height();
                    var content2 = $('.content-profil').height();
                    var real_height = content2-content1;
                    $('.items-container').css('height', container+real_height+'px');
                }
            });
            }
            
            if (soal[6]=='pa') {
            var dana_pendidikan = $('.dana_pendidikan').val();
            var lama_waktu_pendidikan = $('.lama_waktu_pendidikan').val();
            var pa_inf = $('.pa_inf:checked').val();
            var pa_inv = $('.pa_kembali:checked').val();
               
            $.ajax({
                url: "allianz-tujuan-finansial-form.php",
                type: "POST",
                data: {
                    member:pilihan,
                    soal1:soal[1],
                    soal2:soal[2],
                    soal3:soal[3],
                    soal4:soal[4],
                    soal5:soal[5],
                    soal6:soal[6],
                    pa:dana_pendidikan,
                    lama_waktu_pendidikan:lama_waktu_pendidikan,
                    inflasi:pa_inf,
                    investasi: pa_inv
                },
                success:function(result){
                    var hasil = $.parseJSON(result);
                    var html = hasil.item1+'<br />';
                    html += hasil.item2+'<br />';
                    html += "<b>"+hasil.item3+"</b>";
                    
                   $('.desc-fin').empty();
                   $('.desc-fin').append(html);
                    
                      $('.perlu_dana').text(dana_pendidikan);
                      $('.periode').text('1');
                      $('.perlu_dana_total').text(dana_pendidikan);
                      $('.waktu_tersedia').text(lama_waktu_pendidikan);
                      $('.fv_pa').text(commaSeparateNumber(hasil.FV));
                      $('.pmt_pa_bulan').text(commaSeparateNumber(hasil.PMT_bulan));
                      $('.inves_pa').text(pa_inv+'%');
                      $('.infla_pa').text(pa_inf+'%');
                      $('.dana_masa_depan').text(commaSeparateNumber(hasil.FV));
                      $('.pmt_pa_bulan').text(commaSeparateNumber(hasil.PMT_bulan));
                      $('.pmt_pa_tahun').text(commaSeparateNumber(hasil.PMT));
                    
                    var container = $('.items-container').height();
                    var content2 = $('.content-profil').height();
                    var real_height = content2-content1;
                    $('.items-container').css('height', container+real_height+'px');
                }
            });
            }
    });
});