<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>

<div class="row bg_grey">
    
        <div class="container">
            
            <div class="form_cont">
            
                <h1 class="titleRisk">Risk Profile</h1>
                <div class="inv-btn">
						<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
						<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
				</div>
                <div class="stepform showform" id="step_1">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Apakah anda memiliki tujuan yang khusus dari sekedar menabung, 
                                    seperti pendidikan anak atau membeli rumah ?</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="opt_1" value="1" class="quiz_next" setNext="step_2" /> 
                                            Tidak, tapi saya menabung untuk hal-hal yang tidak terduga
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_1" value="2" class="quiz_next" setNext="step_2" /> 
                                            Ya,saya menabung untuk memenuhi kebutuhan yang khusus
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_1" value="3" class="quiz_next" setNext="step_2" /> 
                                            Ya, saya memiliki tujuan khusus di masa yang akan datang, seperti kebutuhan untuk pensiun
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_2">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Dalam berapa lama anda ingin mulai menikmati hasil investasi anda ?</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label><input type="radio" name="opt_2" value="1" class="quiz_next" setNext="step_3" /> &lt; 1 tahun</label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label><input type="radio" name="opt_2" value="2" class="quiz_next" setNext="step_3" /> 3 - 5 tahun</label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_2" value="3" class="quiz_next" setNext="step_3" /> &gt; 5 tahun
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="step_1">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                            </tr>
                       </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_3">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Berikan gambaran yang tepat tentang pengalaman dan pengetahuan investasi anda.</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="opt_3" value="1" class="quiz_next" setNext="step_4" />
                                            Saya menyimpan uang di bank dalam bentuk tabungan dan deposito karena saya kurang mengerti tentang obligasi dan saham.
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_3" value="2" class="quiz_next" setNext="step_4" >
                                            Saya memiliki sedikit pengalaman mengenai saham, obligasi dan reksadana, dan saya menyadari resikonya
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_3" value="3" class="quiz_next" setNext="step_4" >
                                            Saya memiliki pengalaman yang luas tentang investasi terutama di saham, obligasi dan reksadana dan saya paham tentang resiko investasi
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="step_2">
                                       <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_4">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
			                         <p><strong> Apakah anda memiliki dana darurat yang mencukupi untuk membiayai hal-hal yang tidak diinginkan seperti biaya pengobatan keluarga anda?</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label><input type="radio" name="opt_4" value="1" class="quiz_next" setNext="step_5" /> Tidak</label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_4" value="2" class="quiz_next" setNext="step_5" /> Ya,cukup untuk 6 bulan kedepan
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_4" value="3" class="quiz_next" setNext="step_5" > Ya,lebih dari yang saya perlukan
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="step_3">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_5">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong> Berikan gambaran dengan jelas tentang kondisi keuangan anda saat ini.</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="opt_5" value="1" class="quiz_next" setNext="step_6" /> Saya mengatur dengan ketat anggaran bulanan saya  
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_5" value="2" class="quiz_next" setNext="step_6" />
                                            Saya cukup puas dengan kondisi keuangan saya saat ini dan mampu menjaga standar hidup
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_5" value="3" class="quiz_next" setNext="step_6" >
                                            Saya puas dengan kondisi keuangan saya yang lebih dari cukup untuk memenuhi yang saya inginkan
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="prev">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_6">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Bagaimana kondisi keuangan yang akan anda hadapi dimasa yang akan datang ?</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="opt_6" value="1" class="quiz_next" setNext="step_7" />
                                                Kemungkinan penghasilan saya akan berkurang karena pension atau ketidakpastian pekerjaan 
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_6" value="2" class="quiz_next" setNext="step_7">
                                            Setidaknya akan mampu mengimbangi inflasi
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_6" value="3" class="quiz_next" setNext="step_7" />
                                            Setidaknya akan mampu mengimbangi inflasi
                                        </label>
                                    </div><!--/ .checkbox -->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="prev">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_7">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p><strong>Apabila portofolio investasi Anda mengalami penurunan yang signifikan, berapakah tingkat penurunan maksimal yang dapat Anda terima?</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="opt_7" value="1" />
                                                Maksimal penurunan 10%  
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_7" value="2" />
                                            Penurunan tidak lebih dari  50% 
                                        </label>
                                    </div><!--/ .checkbox -->

                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="radio" name="opt_7" value="3" />
                                            Saya dapat menerima penurunan lebih dari 50%
                                        </label>
                                    </div><!--/ .checkbox -->
                                    <button type="button" class="btn btn-primary margintop20" id="submitForm">Submit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav quiz_next" setPrev="step_6">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
                <div class="stepform" id="step_8">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h2 class="result"></h2>
                                    <h3 class="description">Loading&hellip;</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" class="form-nav" setNav="prev">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--/ .stepform -->
                
            </div><!--/ .form_cont -->
        
        </div><!--/ .container -->
        
    </div><!--/ .row_bg_grey -->
	<!-- row end -->

</div>
<!-- homebanner end -->

<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
     $(document).ready(function(){
		$('.inv-btn').hide();
        if( $( '.form_cont a.form-nav' ).length > 0 )
        {
            var rfValues = [];
            var rfSum = 0;
            var navButton = $( '.form_cont .quiz_next' );
            var subButton = $( '.form_cont button#submitForm' );
            
            var ansTitle = '';
            var ansFinale = '';
            var ansKonservatif = 'Anda memiliki toleransi yang <strong>rendah</strong> terhadap resiko dan berinvestasi dengan keamanan dana sebagai prioritas utama. Anda tumbuh secara memadai, yaitu lebih tinggi daripada inflasi.';
            
            var ansModerat = 'Anda memiliki toleransi yang <strong>sedang</strong> terhadap resiko dan berinvestasi secar moderat. Anda dapat menerima fluktuasi pergerakan nilai aset, sebagai imbalan untuk memperoleh peningkatan dalam jangka panjang.';
            
            var ansAgresif = 'Anda memiliki toleransi yang <strong>tinggi</strong> terhadap resiko. Anda dapat menerima fluktuasipergerakan nilai aset yang tajam dalam jangka pendek (dibandingkan dengan investor lain ), dengan tujuan untuk memperoleh keuntungan yang substansial.';
            
            navButton.click(function(){
                
                var href = $( this ).attr( 'setNext' );
                var setPrevs = $(this).attr( 'setPrev' );
                
                if(setPrevs !=undefined){
                    href=setPrevs;
                }
                
                var numeric = href.replace( 'step_', '' ) * 1 - 1;
                
                var currentSelected = $( 'input[name="opt_' + numeric + '"]:checked' ).val();

                if( currentSelected != undefined || (setPrevs!=undefined) )
                {
                    rfValues[ numeric - 1 ] = currentSelected;
                    console.log( rfValues );
                    if( $( '.stepform#' + href ).length > 0 )
                    {
                        $( '.form_cont .showform' ).hide();
                        $( '.stepform#' + href ).stop().fadeIn( 'fast', function(){
                            $( this ).addClass( 'showform' );
                        });
                    }
                }
                else
                {
                    alert( 'Anda harus memilih salah satu jawaban untuk dapat melanjutkan.' );
                }
                return false;
            });
            
            subButton.click(function(){
                $('.inv-btn').show();
                $( '.form_cont .showform' ).hide();
                $( '.stepform#step_8' ).stop().fadeIn( 'fast', function(){
                    $( this ).addClass( 'showform' );
                });
                
                for( var i = 0; i < rfValues.length; i++ )
                {
                    rfSum += rfValues[ i ] * 1;
                }
                
                if( rfSum < 11 )
                {
                    ansTitle = 'Konservatif';
                    ansFinale = ansKonservatif;
                    
                }
                else if( rfSum < 16 )
                {
                    ansTitle = 'Moderat';
                    ansFinale = ansModerat;
                }
                else
                {
                    ansTitle = 'Agresif';
                    ansFinale = ansAgresif;
                }
                
                var title = $( '#step_8 .result' );
                var desc = $( '#step_8 .description' );
                
                title.html( ansTitle );
                desc.html( ansFinale );
                
                return false;
            });
            
        }
    });
  

})
</script>

