<div class="full-w bg-white">
	
    <div class="description">
		
        <div class="image-hotspot">
            
            <div class="image-hotspot--container">
                
                <div class="image-hotspot--item" style="top: 10%; left: 36%;">
                    <a href="#" class="animated pulse">+</a>
                    <div class="image-hotspot--content">
                        <h3>Pendaftaran Peserta</h3>
                        <p>Online via <a href="#" target="_blank">http://www.allianz.co.id/juniorfootballcamp</a></p>
                    </div><!--/ .image-hotspot--content -->
                </div><!--/ .image-hotspot--item -->
                
                
                <div class="image-hotspot--item" style="top: 10%; left: 76%;">
                    <a href="#" class="animated pulse">+</a>
                    <div class="image-hotspot--content right">
                        <h3>Seleksi Tahap 1</h3>
                        <p>
                            Kuis Online<br />
                            Peserta diwajibkan menjawab <strong>10 pertanyaan</strong>
                            yang akan dikirmkan ke email peserta
                        </p>
                    </div><!--/ .image-hotspot--content -->
                </div><!--/ .image-hotspot--item -->
                
                
                <div class="image-hotspot--item" style="top: 28%; left: 80%;">
                    <a href="#" class="animated pulse">+</a>
                    <div class="image-hotspot--content right">
                        <h3>Pengumuman</h3>
                        <p>
                            <strong>100 peserta</strong> yang lolos dari seleksi tahap 1 pada tanggal 
                            <strong>29 Mei 2015</strong> pada website Allianz dan FB AJFC Indonesia.
                        </p>
                    </div><!--/ .image-hotspot--content -->
                </div><!--/ .image-hotspot--item -->
                
                
                <div class="image-hotspot--item" style="top: 40%; left: 85%;">
                    <a href="#" class="animated pulse">+</a>
                    <div class="image-hotspot--content right">
                        <h3>Seleksi Tahap 2</h3>
                        <p>
                            <strong>Tes Fisik</strong><br />
                            <strong>100 peserta</strong> akan melalui proses seleksi keterampilan bermain sepakbola.
                        </p>
                    </div><!--/ .image-hotspot--content -->
                </div><!--/ .image-hotspot--item -->
                
                <div class="image-hotspot--item" style="top: 32%; left: 36%;">
                    <a href="#" class="animated pulse">+</a>
                    <div class="image-hotspot--content">
                        <h3>Seleksi Tahap 3</h3>
                        <p>
                            <strong>Wawancara</strong><br />
                            Tahap terakhir dalam proses seleksi dimana peserta akan diwawancarai selama 7 hari 7 malam
                            <!-- seputar kehidupan sehari-hari -->
                        </p>
                    </div><!--/ .image-hotspot--content -->
                </div><!--/ .image-hotspot--item -->
                
            </div><!--/ .image-hotspot--container -->
            
            <img src="/website/static/images/ajfc/proses-seleksi/proses-seleksi-no-text.jpg" />
            
		</div><!--/ image-hotspot -->
        
	</div><!--/ .description -->
    
</div><!--/ .full-w bg-white -->

<script>
    $(function(){
        if( $( '.image-hotspot--item' ).length > 0 )
        {
            $( '.image-hotspot--item' ).each(function(index, value){
                $( this ).find( 'a' ).click(function(e){
                    e.preventDefault();
                    $( this ).toggleClass( 'active' );
                    $( this ).next().fadeToggle( 'fast', function(){});
                    return false;
                });
            });
        }
    });
</script>