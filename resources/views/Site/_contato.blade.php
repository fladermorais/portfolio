<!-- Contact Subpage -->
<section class="pt-page" id="contato">
    <div class="section-inner custom-page-content">
        <div class="section-title-block second-style">
            <h2 class="section-title">Contato</h2>
        </div>
        
        <div class="section-content">
            <!-- Contact form -->
            <div class="row">
                <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
                    <div class="col-inner ts-20">
                        <div class="block-title">
                            <h3>Como posso te ajudar?</h3>
                        </div>
                        
                        <form class="contact-form" action="{{ route('contatoForm') }}" method="POST">
                            @csrf
                            {{-- @method('POST') --}}
                            {{-- <div class="messages"></div> --}}
                            
                            <div class="controls two-columns">
                                <div class="fields clearfix">
                                    <div class="left-column">
                                        <div class="form-group form-group-with-icon">
                                            <input id="form_name" type="text" name="nome" class="form-control" placeholder="Nome completo" required="required" data-error="Nome is required.">
                                            <div class="form-control-border"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group form-group-with-icon">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Endereço de Email" required="required" data-error="Valid email is required.">
                                            <div class="form-control-border"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group form-group-with-icon">
                                            <input id="form_subject" type="text" name="telefone" class="form-control" placeholder="Telefone" required="required" data-error="Telefone is required.">
                                            <div class="form-control-border"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group form-group-with-icon">
                                            <input id="form_subject" type="text" name="assunto" class="form-control" placeholder="Assunto" required="required" data-error="Subject is required.">
                                            <div class="form-control-border"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="right-column">
                                        <div class="form-group form-group-with-icon">
                                            <textarea id="form_message" name="mensagem" class="form-control" placeholder="Mensagem" rows="10" required="required" data-error="Please, leave me a message."></textarea>
                                            <div class="form-control-border"></div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div> --}}
                                {{-- <button type="submit"></button> --}}
                                <button type="submit" class="button btn-send">Enviar menssagem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Contact form -->
        </div>
    </div>
</section>
<!-- End Contact Subpage -->