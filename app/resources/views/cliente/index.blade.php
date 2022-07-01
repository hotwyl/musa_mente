@extends('layout')

@section('title', 'Musa da Mente')

@section('content')
    <nav>
        <section class="py-3 mb-4 border-bottom">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-start">
                    <a href=""
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ps-3">
                        <i class="fs-5 bi bi-speedometer2"> </i> &nbsp;&nbsp;&nbsp;
                        <span class="fs-4"> Musa da Mente </span>
                    </a>
                </div>

                <div class="col-md-6 text-center">
                    <ul class="nav d-flex justify-content-evenly">
                        <li>
                            <a class="nav-link px-2 link-dark" data-bs-toggle="modal" href="#modalTeste" role="button"><i
                                    class="bi bi-search"></i> Teste</a>
                        </li>
                        <li>
                            <a class="nav-link px-2 link-dark" data-bs-toggle="modal" href="#modalInstrucao"
                                role="button"><i class="bi bi-book"></i> Instruções</a>
                        </li>
                        <li>
                            <a class="nav-link px-2 link-dark" data-bs-toggle="modal" href="#modalAjuda" role="button"><i
                                    class="bi bi-exclamation-triangle"></i> Informações</a>
                        </li>
                        <li>
                            <a class="nav-link px-2 link-dark" data-bs-toggle="modal" href="#modalSobre" role="button"><i
                                    class="bi bi-question-circle"></i> Sobre</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <div class="pe-3">
                        <ul class="nav justify-content-end list-unstyled d-flex">
                            <li class="ms-3">
                                <a class="text-muted" href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-muted" href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-muted" href="#">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-muted" href="#">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-muted" href="#">
                                    <i class="bi bi-envelope-open"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <!-- modal Teste-->
            <div class="modal fade" id="modalTeste" aria-hidden="true" aria-labelledby="ModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalToggleLabel"><i class="bi bi-search"></i> Teste de Mapeamento
                                das Deusas em Mim</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-5">
                            <p>Descubra a porcentagem de cada um dos arquétipos de personalidade das 6 deusas gregas, que
                                existe em você atualmente!</p>
                            <p>Seus comportamentos revelam qual deusa você é. Essa autoavaliação é a revelação de quais
                                deusas mais se conectam com a sua essência e qual é a dominante.</p>
                            <p>É o início de seu autoconhecimento para a autoaceitação e segurança em ser você mesma. Para
                                se relacionar muito melhor consigo mesma e o mundo exterior.</p>
                            <p>
                            <blockquote class="blockquote">“A partir dessa descoberta fantástica, facilitará você ter
                                autoconsciência emocional para poder usar as habilidades de cada deusa na criação do seu EU
                                desejado”.</blockquote>
                            </p>
                            <p class="fst-italic text-center"><span class="fw-bold">Aline Lachovski</span> – <span
                                    class="fw-bolder">Musa Anfitriã</span> <br> <span class="fw-lighter">Sociedade Secreta
                                    das Musas</span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal Instruções-->
            <div class="modal fade" id="modalInstrucao" aria-hidden="true" aria-labelledby="ModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalToggleLabel"><i class="bi bi-book"></i> Instruções para
                                autoavaliação correta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-5">
                            <p>Ao preencher o questionário assinale as respostas segundo o que você percebe ser e não o que
                                você gostaria de ser. O quanto mais sincera você for, mais congruente serão suas respostas e
                                melhor será a aplicação desta instigante
                                e reveladora autoavaliação.</p>
                            <p>Neste sentido é importante que você saiba que não há resposta certa nem errada, apenas há
                                maior ou menor congruência com o que você acredita SER.</p>
                            <p>Considere todos os papéis atualmente em todas as áreas de sua vida, como um todo, não apenas
                                uma parte. O preenchimento deve ser feito atendendo ao critério de atribuir um valor a cada
                                afirmação.</p>
                            <p>Após iniciar o Teste, leia atentamente cada conjunto de seis afirmações. Em seguida, atribua
                                um desses valores abaixo, que mais, menos ou nada, represente você:</p>
                            <p>
                            <ul>
                                <li>3 = a afirmação aplica-se totalmente a mim</li>
                                <li>2 = a afirmação aplica-se apenas em parte a mim</li>
                                <li>1 = a afirmação só se aplica ligeiramente a mim</li>
                                <li>0 = a afirmação absolutamente não se aplica</li>
                            </ul>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal Ajuda-->
            <div class="modal fade" id="modalAjuda" aria-hidden="true" aria-labelledby="ModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalToggleLabel"><i class="bi bi-exclamation-triangle"></i> As 7
                                Chaves Mentais Egípcias</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-5">
                            <p>Seu gráfico com a Deusa dominante. Aquela que mais se conecta com você! Mais as porcentagens
                                de cada Deusa que existe em seu comportamento atual…<br>
                                <strong>É o início de seu autoconhecimento</strong> para ter mais liberdade em ser você
                                mesma.
                            </p>
                            <p><strong>ENTENDA MELHOR…</strong></p>
                            <p class="text-center"><em>“As deusas gregas são imagens de mulheres que viveram na imaginação
                                    humana por mais de três mil anos.<br>
                                    As deusas são modelos ou representações daquilo que as mulheres se assemelham.<br>
                                    Na Grécia antiga as mulheres sabiam que sua vocação ou profissão as colocava sob o
                                    domínio de uma determinada Deusa a quem elas veneravam.<br>
                                    Todas as deusas são padrões potenciais na psique das mulheres.”</em> <small>Jean Shinoda
                                    Bolen</small></p>
                            <p><strong>As principais características das 6 principais Deusas são:</strong></p>
                            <p>“<strong>A MULHER-ATENA</strong> é regida pela deusa da sabedoria e da civilização; ela busca
                                a realização profissional numa carreira, envolvendo-se com educação, cultura intelectual,
                                justiça social e com política.</p>
                            <p><strong>A MULHER-AFRODITE</strong> é regida pela deusa do amor, e está voltada principalmente
                                para relacionamentos humanos, sexualidade, intriga, romance, beleza e inspiração das artes.
                            </p>
                            <p><strong>A MULHER-PERSÓFONE</strong> é regida pela deusa do mundo avernal (submundo); ela é
                                mediúnica e atraída pelo mundo espiritual, pelo oculto, pelas experiências místicas e
                                visionárias, e pelas questões ligadas a morte.</p>
                            <p><strong>A MULHER-ÁRTEMIS</strong> é regida pela deusa das selvas; ela é prática, atlética,
                                aventureira; aprecia a cultura física, a solidão, vida ao ar livre e os animais; dedica-se à
                                proteção do meio ambiente, aos estilos
                                de vida alternativos e às comunidades de mulheres.</p>
                            <p><strong>A Mulher Deméter</strong> é regida pela deusa das colheitas; ela é uma verdadeira mãe
                                terra que gosta de estar grávida, de amamentar e de cuidar de crianças; está envolvida com
                                todos os aspectos do nascimento e com
                                os ciclos reprodutivos da mulher.</p>
                            <p><strong>A Mulher Hera</strong> é regida pela deusa dos céus; ela se ocupa do casamento, da
                                convivência com o homem e, sempre que as mulheres são líderes ou governantes, de questões
                                ligadas ao poder.</p>
                            <p class="text-end"><small>FONTE: Do livro: A Deusa Interior de Jennifer Barker Woolger e Roger
                                    J. Woolger</small></p>
                            <p>Os arquétipos de cada Deusa a seguir, São importantes conceitos sobre o significado de
                                <strong><em>arquétipo</em></strong>, que é termo bastante utilizado pela psicologia
                                Junguiana.
                            </p>
                            <p class="text-center"><em>“Arquétipo é um conjunto de imagens psíquicas presentes no
                                    inconsciente coletivo que seria a parte mais profunda do inconsciente humano. Os
                                    arquétipos são herdados geneticamente dos ancestrais de um grupo de civilização,
                                    etnia ou povo. Os arquétipos não são memórias coesas e “palpáveis” no contexto ou
                                    definição clássica de memória, mas são o conjunto de informações inconscientes que
                                    motivam o ser humano a acreditar ou dar crédito a determinados
                                    tipos de comportamento. Os arquétipos correspondem ao conjunto de crenças e valores
                                    comportamentais básicos do ser humano, <strong>podem se manifestar nas crenças
                                        religiosas, mitológicas ou no comportamento inconsciente do indivíduo</strong>.” -
                                    Dicionário
                                    Informal</small></em>
                            </p>
                            <p><strong>Os arquétipos de cada deusa e o Caminho para o Crescimento:</strong></p>
                            <p><strong>ATENA</strong> – Seu arquétipo é a mente lógica, governada mais pela razão do que
                                pelo coração. O seu caminho para o crescimento se dá em 3 questões específicas:
                                <li><ins>Voltar-se para seu interior</ins>: Uma frase que demonstra Atenas é “Minha cabeça
                                    está sempre funcionando”. Ela sempre está ativa e usando da razão, por isso, é
                                    imprescindível, que pare um pouco e olhe para dentro
                                    de si mesmo e amplie seu autoconhecimento.</li>
                                <li><ins>Recupera a criança</ins>: Já que para Atenas “Ser esperta a respeito de tudo” é
                                    algo bem marcante; ela acaba por deixar de ser criança para ser adulta muito
                                    precocemente, portanto, deixar espaço para sua criança interior
                                    agir, ou seja, se permitir ser cuidada, brincar, rir, chorar, ouvir os outros e aprender
                                    com as experiências dos mesmos.</li>
                                <li><ins>Descobrir a mãe</ins>: Entrar em contato com a energia da sua própria mãe é
                                    imprescindível, já que ela, foi criada somente pelo seu pai e não ter valorizado e
                                    honrado sua própria mãe.</li>
                            </p>
                            <p><strong>AFRODITE</strong> – Seu arquétipo é guiar e controlar o prazer do amor e da beleza,
                                da sexualidade e da sensualidade. O seu caminho para o crescimento é levar a consciência sua
                                característica predominante e se relacionar
                                com ela de forma saudável, de modo que não se reprima e nem se frustre ao se envolver com os
                                outros.</p>
                            <p><strong>PERSÓFONE</strong> – Seu arquétipo refere-se a característica de ser compreensiva nas
                                ações dos outros, além de não tomar atitudes por si própria, e depender de outras pessoas. O
                                seu caminho para o crescimento é responder
                                e cuidar da sua própria vida.</p>
                            <p><strong>ÁRTEMIS</strong> – Seu arquétipo é o espírito feminino independente, refere-se a
                                possibilidade da mulher se relacionar com seus próprios objetivos e tomar suas próprias
                                decisões. O seu caminho para o crescimento está
                                diretamente relacionado com o fato dela ser receptiva, aberta para os relacionamentos
                                amorosos, uma vez que sua característica marcante é a independência.</p>
                            <p><strong>DEMÉTER</strong> – Seu arquétipo é o materno. O seu caminho para o crescimento, está
                                profundamente ligado à sua dificuldade em dizer “não”, a ser generosa com tudo e todos,
                                igualmente como uma boa mãe. Consequentemente,
                                tem bloqueio em perceber seus pontos negativos e dar a oportunidade de mudar, de crescer e
                                se desenvolver.</p>
                            <p><strong>HERA</strong> – Seu arquétipo é o desejo de se tornar esposa, quando está sozinha
                                sente-se incompleta. O seu caminho para o crescimento, em virtude disso, seria pensar antes
                                de se envolver amorosamente com alguém.</p>
                            <p><strong>Faça o Teste das Deusas Gregas</strong></p>
                            <p><strong>FONTE:</strong> do livro <em>As Deusas e a Mulher de Jean Shinoda
                                    Bolen</em><br>Parabéns! Você é uma buscadora, e quem busca… encontra!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal Sobre-->
            <div class="modal fade" id="modalSobre" aria-hidden="true" aria-labelledby="ModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalToggleLabel"><i class="bi bi-question-circle"></i> Olá, musa
                                maravilhosa!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p> Eu sou Aline Lachovski, Anfitriã do Musa da Mente, bruxa e Coach Comportamental 360,
                                especializada no poder feminino.</p>
                            <p> Eu trabalhei por oito anos com o meu pai Adriano Lachovski, criador dessa metodologia
                                comportamental, onde se aprofundou no autoconhecimento e poder da mente.</p>
                            <p> Mas algo fantástico ia acontecer, e no equinócio de primavera de 2017 tudo mudou...</p>
                            <p> Eu tive uma grande despertar espiritual e me descobri bruxa e sensitiva.</p>
                            <p> Coisas do outro mundo aconteceram e nesses desafios eu trabalhei minha conexão com todas as
                                Deusas...</p>
                            <p> Hoje ajudo mulheres a despertarem e equilibrarem esses poderes ocultos e reprimidos que
                                existem dentro de todas elas.</p>
                            <p><strong>Não ‘seje’ burraaaa, seja Musa.<br>🌛S.S.M.🌜🦇 - Sociedade Secreta das
                                    Musas<br>Aline Lachovski<br>Musa Anfitriã – Criadora do Musa da Mente(r)<br><a
                                        href="mailto:aline@musadamente.com.br">aline@musadamente.com.br</a></strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </nav>

    <form action="" method="post" autocomplete="off">
        @csrf

        <!--Seção 0-->
        <section id="section0" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">O primeiro passo para seu autoconhecimento</h2>
                </div>

                <div class="card-body">
                    <p class="card-text"> Como Descobrir e Eliminar a “Força Invisível” Que Domina a Maioria Das Mulheres
                        Após Os 25 Anos.</p>
                    <p class="card-text"> É assustador como a imensa maioria das mulheres acima de 25 anos, desconhecem a
                        “força invisível” que as
                        impede de acreditar e usar seu poder espiritual, intuição, equilíbrio e sensualidade, de como ser
                        uma
                        verdadeira mulher poderosa.</p>
                    <p class="card-text"> Está na hora de uma grande transformação acontecer em sua vida!</p>
                </div>

                <div class="card-footer py-3 text-center">
                    <button type="button" class="btn btn-primary btn-lg mx-5" id="btnAvancar0"> Iniciar Teste </button>
                </div>
            </div>
        </section>

        <!--Seção 1-->
        <section id="section1" lass="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Qual a Deusa predominante em mim?</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 1-->
                    <div class="pt-3" id="question1">
                        <div><strong>A) Como não saio muito, roupas e maquiagem não são tão importantes para
                                mim.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q1o0" name="s1q1" value="{{$dad['opt1']['val']}}" /> <label class="form-check-label"
                                for="s1q1o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q1o1" name="s1q1" value="{{$dad['opt2']['val']}}" /> <label class="form-check-label"
                                for="s1q1o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q1o2" name="s1q1" value="{{$dad['opt3']['val']}}" /> <label class="form-check-label"
                                for="s1q1o2">{{$dad['opt3']['text']}}</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q1o3" name="s1q1" value="{{$dad['opt4']['val']}}" /> <label class="form-check-label"
                                for="s1q1o3">{{$dad['opt4']['text']}}</label></div>
                    </div>

                    <!--Questão 2-->
                    <div class="pt-4" id="question2">
                        <div><strong>B) Prefiro usar jeans e uma camisa confortável.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q2o0" name="s1q2" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s1q2o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q2o1" name="s1q2" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s1q2o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q2o2" name="s1q2" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s1q2o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q2o3" name="s1q2" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s1q2o3">{{$dad['opt4']['text']}} </label></div>
                    </div>

                    <!--Questão 3-->
                    <div class="pt-4" id="question3">
                        <div><strong>C) Minha aparência não é nada convencional.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q3o0" name="s1q3" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s1q3o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q3o1" name="s1q3" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s1q3o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q3o2" name="s1q3" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s1q3o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q3o3" name="s1q3" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s1q3o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 4-->
                    <div class="pt-4" id="question4">
                        <div><strong>D) Gosto de me vestir bem, mas de maneira conservadora, e de usar pouca
                                maquiagem.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q4o0" name="s1q4" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s1q4o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q4o1" name="s1q4" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s1q4o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q4o2" name="s1q4" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s1q4o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q4o3" name="s1q4" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s1q4o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 5-->
                    <div class="pt-4" id="question5">
                        <div><strong>E) Gosto de me arrumar e de me mostrar atraente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q5o0" name="s1q5" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s1q5o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q5o1" name="s1q5" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s1q5o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q5o2" name="s1q5" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s1q5o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q5o3" name="s1q5" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s1q5o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 6-->
                    <div class="pt-4 pb-3" id="question6">
                        <div><strong>F) Estar bem vestida e maquiada me dá segurança para enfrentar o mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q6o0" name="s1q6" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s1q6o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q6o1" name="s1q6" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s1q6o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q6o2" name="s1q6" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s1q6o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s1q6o3" name="s1q6" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s1q6o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-secondary btn-sm mx-5" disabled><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar1"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 2-->
        <section id="section2" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">MEU CORPO (como eu me dou com o corpo)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 7-->
                    <div class="pt-3" id="question7">
                        <div><strong>A) Eu me inclino a não pensar sobre o meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q7o0" name="s2q7" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q7o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q7o1" name="s2q7" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q7o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q7o2" name="s2q7" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q7o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q7o3" name="s2q7" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q7o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 8-->
                    <div class="pt-4" id="question8">
                        <div><strong>B) Meu corpo se sente muito melhor quando estou ativa e fazendo
                                exercícios.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q8o0" name="s2q8" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q8o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q8o1" name="s2q8" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q8o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q8o2" name="s2q8" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q8o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q8o3" name="s2q8" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q8o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 9-->
                    <div class="pt-4" id="question9">
                        <div><strong>C) Gosto que meu corpo seja tocado bastante por quem eu amo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q9o0" name="s2q9" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q9o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q9o1" name="s2q9" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q9o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q9o2" name="s2q9" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q9o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q9o3" name="s2q9" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q9o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 10-->
                    <div class="pt-4" id="question10">
                        <div><strong>D) Muitas vezes eu absolutamente não me sinto no meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q10o0" name="s2q10" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q10o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q10o1" name="s2q10" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q10o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q10o2" name="s2q10" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q10o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q10o3" name="s2q10" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q10o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 11-->
                    <div class="pt-4" id="question11">
                        <div><strong>E) Acho embaraçoso falar sobre o meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q11o0" name="s2q11" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q11o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q11o1" name="s2q11" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q11o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q11o2" name="s2q11" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q11o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q11o3" name="s2q11" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q11o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 12-->
                    <div class="pt-4 pb-3" id="question12">
                        <div><strong>F) Adora estar grávida/Quero muito engravidar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q12o0" name="s2q12" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s2q12o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q12o1" name="s2q12" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s2q12o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q12o2" name="s2q12" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s2q12o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s2q12o3" name="s2q12" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s2q12o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar2"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar2"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 3-->
        <section id="section3" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">CASA E LAR (o que tem importância para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 13-->
                    <div class="pt-3" id="question13">
                        <div><strong>A) Gosto que minha casa seja elegante e impressione as pessoas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q13o0" name="s3q13" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q13o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q13o1" name="s3q13" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q13o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q13o2" name="s3q13" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q13o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q13o3" name="s3q13" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q13o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 14-->
                    <div class="pt-4" id="question14">
                        <div><strong>B) Prefiro a cidade; para mim um apartamento está ótimo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q14o0" name="s3q14" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q14o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q14o1" name="s3q14" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q14o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q14o2" name="s3q14" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q14o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q14o3" name="s3q14" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q14o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 15-->
                    <div class="pt-4" id="question15">
                        <div><strong>C) Minha casa precisa ser aconchegante e ter lugar para todos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q15o0" name="s3q15" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q15o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q15o1" name="s3q15" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q15o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q15o2" name="s3q15" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q15o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q15o3" name="s3q15" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q15o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 16-->
                    <div class="pt-4" id="question16">
                        <div><strong>D) Preciso de privacidade e espaço para as coisas que gosto de fazer.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q16o0" name="s3q16" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q16o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q16o1" name="s3q16" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q16o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q16o2" name="s3q16" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q16o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q16o3" name="s3q16" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q16o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 17-->
                    <div class="pt-4" id="question17">
                        <div><strong>E) O lugar onde moro tem que ser confortável e bonito.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q17o0" name="s3q17" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q17o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q17o1" name="s3q17" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q17o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q17o2" name="s3q17" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q17o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q17o3" name="s3q17" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q17o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 18-->
                    <div class="pt-4 pb-3" id="question18">
                        <div><strong>F) Prefiro viver no campo ou onde eu possa estar perto de parques e espaços
                                abertos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q18o0" name="s3q18" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s3q18o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q18o1" name="s3q18" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s3q18o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q18o2" name="s3q18" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s3q18o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s3q18o3" name="s3q18" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s3q18o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar3"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar3"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 4-->
        <section id="section4" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Alimentação e comida (a importância para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 19-->
                    <div class="pt-3" id="question19">
                        <div><strong>A) Tomo cuidado com a alimentação afim de manter o meu corpo saudável.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q19o0" name="s4q19" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q19o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q19o1" name="s4q19" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q19o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q19o2" name="s4q19" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q19o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q19o3" name="s4q19" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q19o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 20-->
                    <div class="pt-4" id="question20">
                        <div><strong>B) Gosto de jantar fora em algum lugar romântico.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q20o0" name="s4q20" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q20o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q20o1" name="s4q20" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q20o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q20o2" name="s4q20" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q20o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q20o3" name="s4q20" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q20o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 21-->
                    <div class="pt-4" id="question21">
                        <div><strong>C) Gosto muito de comer fora onde se possa conversar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q21o0" name="s4q21" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q21o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q21o1" name="s4q21" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q21o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q21o2" name="s4q21" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q21o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q21o3" name="s4q21" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q21o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 22-->
                    <div class="pt-4" id="question22">
                        <div><strong>D) Eu realmente gosto de cozinhar para os outros.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q22o0" name="s4q22" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q22o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q22o1" name="s4q22" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q22o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q22o2" name="s4q22" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q22o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q22o3" name="s4q22" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q22o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 23-->
                    <div class="pt-4" id="question23">
                        <div><strong>E) As refeições são momentos familiares importantes.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q23o0" name="s4q23" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q23o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q23o1" name="s4q23" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q23o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q23o2" name="s4q23" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q23o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q23o3" name="s4q23" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q23o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 24-->
                    <div class="pt-4 pb-3" id="question24">
                        <div><strong>F) Comer não é uma coisa muito importante para mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q24o0" name="s4q24" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s4q24o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q24o1" name="s4q24" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s4q24o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q24o2" name="s4q24" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s4q24o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s4q24o3" name="s4q24" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s4q24o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar4"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar4"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 5-->
        <section id="section5" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Infância (como eu costumava ser)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 25-->
                    <div class="pt-3" id="question25">
                        <div><strong>A) Eu tinha muitas brincadeiras secretas e muitos mundos imaginários.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o0" name="s5q25" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q25o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o1" name="s5q25" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q25o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o2" name="s5q25" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q25o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q19o3" name="s5q25" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q25o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 26-->
                    <div class="pt-4" id="question26">
                        <div><strong>B) Eu sempre dirigia as brincadeiras com as minhas amigas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q26o0" name="s5q26" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q26o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q26o1" name="s5q26" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q26o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q26o2" name="s5q26" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q26o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q26o3" name="s5q26" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q26o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 27-->
                    <div class="pt-4" id="question27">
                        <div><strong>C) Eu gostava de brincar basicamente com bonecas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q27o0" name="s5q27" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q27o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q27o1" name="s5q27" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q27o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q27o2" name="s5q27" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q27o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q27o3" name="s5q27" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q27o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 28-->
                    <div class="pt-4" id="question28">
                        <div><strong>D) Eu tinha sempre o nariz enfiado num livro, depois de uma certa idade.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q28o0" name="s5q28" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q28o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q28o1" name="s5q28" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q28o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q28o2" name="s5q28" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q28o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q28o3" name="s5q28" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q28o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 29-->
                    <div class="pt-4" id="question29">
                        <div><strong>E) Eu adorava estar ao ar livre e entre os animais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q29o0" name="s5q29" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q29o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q29o1" name="s5q29" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q29o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q29o2" name="s5q29" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q29o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q29o3" name="s5q29" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q29o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 30-->
                    <div class="pt-4 pb-3" id="question30">
                        <div><strong>F) Eu adorava me vestir e me arrumar como gente grande.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q30o0" name="s5q30" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s5q30o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q30o1" name="s5q30" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s5q30o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q30o2" name="s5q30" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s5q30o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s5q30o3" name="s5q30" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s5q30o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar5"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar5"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 6-->
        <section id="section6" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">OS HOMENS (o que eu preciso em um)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 31-->
                    <div class="pt-3" id="question31">
                        <div><strong>A) Quero um homem que me excite sexualmente sempre.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q31o0" name="s6q31" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q31o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q31o1" name="s6q31" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q31o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q31o2" name="s6q31" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q31o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q31o3" name="s6q31" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q31o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 32-->
                    <div class="pt-4" id="question32">
                        <div><strong>B) Quero um homem que me proteja e me faça mimos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q32o0" name="s6q32" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q32o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q32o1" name="s6q32" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q32o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q32o2" name="s6q32" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q32o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q32o3" name="s6q32" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q32o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 33-->
                    <div class="pt-4" id="question33">
                        <div><strong>C) Gosto de um homem que seja independente e me proporcione bastante
                                espaço.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q33o0" name="s6q33" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q33o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q33o1" name="s6q33" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q33o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q33o2" name="s6q33" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q33o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q33o3" name="s6q33" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q33o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 34-->
                    <div class="pt-4" id="question34">
                        <div><strong>D) Preciso de um homem que me desafie intelectualmente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q34o0" name="s6q34" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q34o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q34o1" name="s6q34" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q34o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q34o2" name="s6q34" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q34o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q34o3" name="s6q34" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q34o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 35-->
                    <div class="pt-4" id="question35">
                        <div><strong>E) Preciso de um homem que compreenda o meu mundo interior.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q35o0" name="s6q35" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q35o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q35o1" name="s6q35" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q35o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q35o2" name="s6q35" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q35o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q35o3" name="s6q35" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q35o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 36-->
                    <div class="pt-4 pb-3" id="question36">
                        <div><strong>F) Quero um homem de cuja posição no mundo eu possa me orgulhar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q36o0" name="s6q36" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s6q36o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q36o1" name="s6q36" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s6q36o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q36o2" name="s6q36" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s6q36o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s6q36o3" name="s6q36" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s6q36o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar6"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar6"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 7-->
        <section id="section7" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">AMOR E CASAMENTO (o que significa para mim)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 37-->
                    <div class="pt-3" id="question37">
                        <div><strong>A) O casamento só dá certo quando houver uma ligação espiritual maior.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q37o0" name="s7q37" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q37o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q37o1" name="s7q37" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q37o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q37o2" name="s7q37" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q37o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q37o3" name="s7q37" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q37o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 38-->
                    <div class="pt-4" id="question38">
                        <div><strong>B) O casamento é o alicerce da sociedade.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q38o0" name="s7q38" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q38o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q38o1" name="s7q38" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q38o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q38o2" name="s7q38" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q38o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q38o3" name="s7q38" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q38o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 39-->
                    <div class="pt-4" id="question39">
                        <div><strong>C) O amor é mais importante que tudo; sem ele o meu casamento seria vazio.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q39o0" name="s7q39" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q39o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q39o1" name="s7q39" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q39o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q39o2" name="s7q39" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q39o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q39o3" name="s7q39" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q39o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 40-->
                    <div class="pt-4" id="question40">
                        <div><strong>D) Tudo bem com o amor e o casamento, desde que eu tenha bastante
                                liberdade.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o0" name="s7q40" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q40o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o1" name="s7q40" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q40o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o2" name="s7q40" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q40o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o3" name="s7q40" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q40o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 41-->
                    <div class="pt-4" id="question41">
                        <div><strong>E) O casamento protege os filhos; o amor apenas não é suficiente.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q41o0" name="s7q41" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q41o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q41o1" name="s7q41" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q41o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q41o2" name="s7q41" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q41o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q41o3" name="s7q41" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q41o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 42-->
                    <div class="pt-4 pb-3" id="question42">
                        <div><strong>F) Meu casamento às vezes tem que ser sacrificado em função do meu
                                trabalho.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o0" name="s7q42" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s7q42o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o1" name="s7q42" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s7q42o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o2" name="s7q42" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s7q42o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s7q40o3" name="s7q42" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s7q42o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar7"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar7"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 8-->
        <section id="section8" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">SEXUALIDADE (como eu sou na cama)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 43-->
                    <div class="pt-3" id="question43">
                        <div><strong>A) Às vezes é difícil eu me soltar completamente quando faço sexo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q43o0" name="s8q43" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q43o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q43o1" name="s8q43" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q43o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q43o2" name="s8q43" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q43o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q43o3" name="s8q43" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q43o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 44-->
                    <div class="pt-4" id="question44">
                        <div><strong>B) Eu me excito facilmente com o homem certo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q44o0" name="s8q44" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q44o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q44o1" name="s8q44" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q44o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q44o2" name="s8q44" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q44o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q44o3" name="s8q44" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q44o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 45-->
                    <div class="pt-4" id="question45">
                        <div><strong>C) Às vezes leva um certo tempo até eu de fato entrar no meu corpo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q45o0" name="s8q45" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q45o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q45o1" name="s8q45" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q45o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q45o2" name="s8q45" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q45o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q45o3" name="s8q45" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q45o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 46-->
                    <div class="pt-4" id="question46">
                        <div><strong>D) No sexo adoro tanto dar quanto receber.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q46o0" name="s8q46" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q46o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q46o1" name="s8q46" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q46o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q46o2" name="s8q46" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q46o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q46o3" name="s8q46" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q46o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 47-->
                    <div class="pt-4" id="question47">
                        <div><strong>E) Eu sou meio tímida sexualmente, mas posso me tornar quase selvagem.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q47o0" name="s8q47" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q47o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q47o1" name="s8q47" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q47o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q47o2" name="s8q47" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q47o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q47o3" name="s8q47" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q47o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 48-->
                    <div class="pt-4 pb-3" id="question48">
                        <div><strong>F) O sexo pode ser extático e quase místico para mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q48o0" name="s8q48" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s8q48o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q48o1" name="s8q48" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s8q48o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q48o2" name="s8q48" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s8q48o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s8q48o3" name="s8q48" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s8q48o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar8"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar8"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 9-->
        <section id="section9" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">OS FILHOS (o papel deles na minha vida)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 49-->
                    <div class="pt-3" id="question49">
                        <div><strong>A) Sinto-me mais feliz quando estou fazendo alguma coisa ao ar livre com meus
                                filhos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q49o0" name="s9q49" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q49o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q49o1" name="s9q49" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q49o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q49o2" name="s9q49" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q49o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q49o3" name="s9q49" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q49o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 50-->
                    <div class="pt-4" id="question50">
                        <div><strong>B) Meus filhos são a maior realização da minha vida.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q50o0" name="s9q50" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q50o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q50o1" name="s9q50" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q50o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q50o2" name="s9q50" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q50o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q50o3" name="s9q50" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q50o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 51-->
                    <div class="pt-4" id="question51">
                        <div><strong>C) Eu espero que meus filhos venham a ser um grande crédito a meu favor.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q51o0" name="s9q51" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q51o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q51o1" name="s9q51" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q51o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q51o2" name="s9q51" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q51o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q51o3" name="s9q51" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q51o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 52-->
                    <div class="pt-4" id="question52">
                        <div><strong>D) Prefiro não ter filhos para me dedicar à minha carreira.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q52o0" name="s9q52" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q52o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q52o1" name="s9q52" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q52o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q52o2" name="s9q52" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q52o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q52o3" name="s9q52" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q52o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 53-->
                    <div class="pt-4" id="question53">
                        <div><strong>E) Eu amo os meus filhos, mas a minha vida amorosa é igualmente
                                importante.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q53o0" name="s9q53" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q53o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q53o1" name="s9q53" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q53o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q53o2" name="s9q53" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q53o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q53o3" name="s9q53" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q53o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 54-->
                    <div class="pt-4 pb-3" id="question54">
                        <div><strong>F) Eu amo os meus filhos e quero sempre saber o que estão pensando ou
                                sentindo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q54o0" name="s9q54" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s9q54o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q54o1" name="s9q54" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s9q54o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q54o2" name="s9q54" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s9q54o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s9q54o3" name="s9q54" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s9q54o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar9"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar9"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 10-->
        <section id="section10" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">PASSATEMPOS (coisas que eu gosto de fazer)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 55-->
                    <div class="pt-3" id="question55">
                        <div><strong>A) Metafísica, leitura de tarô, astrologia, diário dos sonhos, Seminários da Nova Era,
                                arte
                                e rituais pessoais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q55o0" name="s10q55" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q55o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q55o1" name="s10q55" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q55o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q55o2" name="s10q55" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q55o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q55o3" name="s10q55" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q55o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 56-->
                    <div class="pt-4" id="question56">
                        <div><strong>B) Colecionar joias, objetos de arte e roupas bonitas; moda, música,
                                teatro.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q56o0" name="s10q56" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q56o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q56o1" name="s10q56" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q56o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q56o2" name="s10q56" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q56o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q56o3" name="s10q56" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q56o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 57-->
                    <div class="pt-4" id="question57">
                        <div><strong>C) Esportes, atletismo, correr, acampar, pescar, velejar, montar a cavalo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q57o0" name="s10q57" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q57o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q57o1" name="s10q57" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q57o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q57o2" name="s10q57" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q57o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q57o3" name="s10q57" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q57o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 58-->
                    <div class="pt-4" id="question58">
                        <div><strong>D) Serviços comunitários, clubes sociais, grupos de voluntários, igrejas
                                paroquiais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q58o0" name="s10q58" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q58o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q58o1" name="s10q58" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q58o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q58o2" name="s10q58" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q58o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q58o3" name="s10q58" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q58o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 59-->
                    <div class="pt-4" id="question59">
                        <div><strong>E) Campanhas políticas, apoio a minorias, museus, séries de conferências,
                                leituras.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q59o0" name="s10q59" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q59o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q59o1" name="s10q59" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q59o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q59o2" name="s10q59" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q59o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q59o3" name="s10q59" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q59o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 60-->
                    <div class="pt-4 pb-3" id="question60">
                        <div><strong>F) Cozinhar, jardinar, bordar, tecer, costurar.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q60o0" name="s10q60" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s10q60o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q60o1" name="s10q60" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s10q60o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q60o2" name="s10q60" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s10q60o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s10q60o3" name="s10q60" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s10q60o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar10"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar10"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 11-->
        <section id="section11" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">FESTAS (como eu me comporto)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 61-->
                    <div class="pt-3" id="question61">
                        <div><strong>A) Eu geralmente me envolvo em discussões políticas ou intelectuais.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q61o0" name="s11q61" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q61o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q61o1" name="s11q61" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q61o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q61o2" name="s11q61" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q61o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q61o3" name="s11q61" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q61o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 62-->
                    <div class="pt-4" id="question62">
                        <div><strong>B) Costumo ser atraída por pessoas com problemas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q62o0" name="s11q62" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q62o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q62o1" name="s11q62" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q62o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q62o2" name="s11q62" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q62o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q62o3" name="s11q62" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q62o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 63-->
                    <div class="pt-4" id="question63">
                        <div><strong>C) Prefiro ser a anfitriã das minhas próprias festas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q63o0" name="s11q63" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q63o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q63o1" name="s11q63" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q63o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q63o2" name="s11q63" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q63o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q63o3" name="s11q63" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q63o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 64-->
                    <div class="pt-4" id="question64">
                        <div><strong>D) Não consigo de deixar de querer localizar o homem mais sensual do
                                lugar.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q64o0" name="s11q64" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q64o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q64o1" name="s11q64" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q64o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q64o2" name="s11q64" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q64o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q64o3" name="s11q64" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q64o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 65-->
                    <div class="pt-4" id="question65">
                        <div><strong>E) Gosto de ter a certeza de que todos estão se divertindo.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q65o0" name="s11q65" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q65o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q65o1" name="s11q65" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q65o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q65o2" name="s11q65" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q65o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q65o3" name="s11q65" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q65o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 66-->
                    <div class="pt-4 pb-3" id="question66">
                        <div><strong>F) Festas me deixam tensas, não vou muito a elas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q66o0" name="s11q66" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s11q65o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q66o1" name="s11q66" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s11q65o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q66o2" name="s11q66" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s11q65o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s11q66o3" name="s11q66" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s11q65o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar11"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar11"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 12-->
        <section id="section12" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">AMIZADES (o lugar que ocupam em minha vida)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 67-->
                    <div class="pt-3" id="question67">
                        <div><strong>A) A maioria das minhas amigas têm filhos da mesma idade que os meus.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q67o0" name="s12q67" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q67o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q67o1" name="s12q67" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q67o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q67o2" name="s12q67" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q67o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q67o3" name="s12q67" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q67o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 68-->
                    <div class="pt-4" id="question68">
                        <div><strong>B) Escolho as minhas amizades com muito cuidado, elas são muito importantes para
                                mim.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q68o0" name="s12q68" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q68o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q68o1" name="s12q68" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q68o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q68o2" name="s12q68" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q68o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q68o3" name="s12q68" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q68o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 69-->
                    <div class="pt-4" id="question69">
                        <div><strong>C) Gosto de partilhar minha últimas ideias e projetos com minhas amigas e meus
                                amigos.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q69o0" name="s12q69" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q69o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q69o1" name="s12q69" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q69o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q69o2" name="s12q69" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q69o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q69o3" name="s12q69" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q69o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 70-->
                    <div class="pt-4" id="question70">
                        <div><strong>D) Minhas amizades tendem a ser amizades mágicas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q70o0" name="s12q70" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q70o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q70o1" name="s12q70" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q70o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q70o2" name="s12q70" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q70o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q70o3" name="s12q70" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q70o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 71-->
                    <div class="pt-4" id="question71">
                        <div><strong>E) Minhas amigas são basicamente as esposas do meu marido.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q71o0" name="s12q71" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q71o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q71o1" name="s12q71" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q71o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q71o2" name="s12q71" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q71o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q71o3" name="s12q71" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q71o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 72-->
                    <div class="pt-4 pb-3" id="question72">
                        <div><strong>F) Meus amigos são geralmente mais importantes para mim do que as minhas
                                amigas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q72o0" name="s12q72" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s12q72o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q72o1" name="s12q72" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s12q72o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q72o2" name="s12q72" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s12q72o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s12q72o3" name="s12q72" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s12q72o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar12"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar12"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 13-->
        <section id="section13" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">LIVROS (que tipo de livros eu trago por perto)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 73-->
                    <div class="pt-3" id="question73">
                        <div><strong>A) Livros de receitas, de artesanato, de como cuidar de crianças.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q73o0" name="s13q73" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q73o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q73o1" name="s13q73" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q73o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q73o2" name="s13q73" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q73o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q73o3" name="s13q73" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q73o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 74-->
                    <div class="pt-4" id="question74">
                        <div><strong>B) Literatura séria, biografias, livros de viagens, historia ilustrada.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q74o0" name="s13q74" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q74o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q74o1" name="s13q74" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q74o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q74o2" name="s13q74" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q74o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q74o3" name="s13q74" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q74o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 75-->
                    <div class="pt-4" id="question75">
                        <div><strong>C) Livros da Nova Era, psicologia, metafísica, livros de canalização mediunidade
                                contemporânea), I Ching.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q75o0" name="s13q75" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q75o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q75o1" name="s13q75" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q75o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q75o2" name="s13q75" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q75o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q75o3" name="s13q75" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q75o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 76-->
                    <div class="pt-4" id="question76">
                        <div><strong>D) Livros de esporte e saúde, manuais de ioga, livros de animais, da vida selvagem, de
                                como
                                fazer coisas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q76o0" name="s13q76" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q76o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q76o1" name="s13q76" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q76o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q76o2" name="s13q76" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q76o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q76o3" name="s13q76" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q76o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 77-->
                    <div class="pt-4" id="question77">
                        <div><strong>E) Livros de artes, biografias populares, romances, poesia.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q77o0" name="s13q77" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q77o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q77o1" name="s13q77" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q77o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q77o2" name="s13q77" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q77o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q77o3" name="s13q77" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q77o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 78-->
                    <div class="pt-4 pb-3" id="question78">
                        <div><strong>F) Política, sociologia, livros intelectuais, literatura avant-garde, livros
                                feministas.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q78o0" name="s13q78" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s13q78o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q78o1" name="s13q78" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s13q78o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q78o2" name="s13q78" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s13q78o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s13q78o3" name="s13q78" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s13q78o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar13"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar13"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 14-->
        <section id="section14" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">O MUNDO AÍ AFORA (minha atitude)</h2>
                </div>

                <div class="card-body px-5">
                    <!--Questão 79-->
                    <div class="pt-3" id="question79">
                        <div><strong>A) Eu sempre procuro me manter informada sobre o que acontece no mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q79o0" name="s14q79" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q79o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q79o1" name="s14q79" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q79o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q79o2" name="s14q79" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q79o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q79o3" name="s14q79" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q79o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 80-->
                    <div class="pt-4" id="question80">
                        <div><strong>B) A política só me interessa pelas intrigas de bastidores.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q80o0" name="s14q80" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q80o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q80o1" name="s14q80" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q80o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q80o2" name="s14q80" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q80o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q80o3" name="s14q80" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q80o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 81-->
                    <div class="pt-4" id="question81">
                        <div><strong>C) Eu conheço mais o mundo pelos meus sonhos do que pela TV ou pelos
                                jornais.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q81o0" name="s14q81" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q81o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q81o1" name="s14q81" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q81o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q81o2" name="s14q81" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q81o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q81o3" name="s14q81" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q81o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 82-->
                    <div class="pt-4" id="question82">
                        <div><strong>D) Eu raramente sei – ou quero saber! – o que está acontecendo no mundo.</strong><br>
                        </div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q82o0" name="s14q82" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q82o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q82o1" name="s14q82" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q82o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q82o2" name="s14q82" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q82o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q82o3" name="s14q82" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q82o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 83-->
                    <div class="pt-4" id="question83">
                        <div><strong>E) O mundo é basicamente dos homens, eles que se virem.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q83o0" name="s14q83" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q83o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q83o1" name="s14q83" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q83o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q83o2" name="s14q83" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q83o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q83o3" name="s14q83" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q83o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                    <!--Questão 84-->
                    <div class="pt-4 pb-3" id="question84">
                        <div><strong>F) É importante para mim ter um papel ativo na comunidade.</strong><br></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q84o0" name="s14q84" value={{$dad['opt1']['val']}} /> <label class="form-check-label"
                                for="s14q84o0">{{$dad['opt1']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q84o1" name="s14q84" value={{$dad['opt2']['val']}} /> <label class="form-check-label"
                                for="s14q84o1">{{$dad['opt2']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q84o2" name="s14q84" value={{$dad['opt3']['val']}} /> <label class="form-check-label"
                                for="s14q84o2">{{$dad['opt3']['text']}} </label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                id="s14q84o3" name="s14q84" value={{$dad['opt4']['val']}} /> <label class="form-check-label"
                                for="s14q84o3">{{$dad['opt4']['text']}} </label></div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-danger btn-sm mx-5" id="btnVoltar14"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-success btn-sm mx-5" id="btnAvancar14"> Avançar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>

        <!--Seção 15-->
        <section id="section15" class="my-5">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="text-center">Finalização</h2>
                </div>

                <div class="card-body">
                    <!--Questão 85-->
                    <div class="pt-3" id="question85">
                        <label for="basic-url" class="form-label">Informe o melhor email para que possamos enviar o
                            resultado do teste.</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-open-fill"></i></span>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Informe seu email" aria-label="email" aria-describedby="email" required>
                        </div>
                    </div>
                </div>

                <div class="card-footer py-3">
                    <button type="button" class="btn btn-secondary btn-sm mx-5" id="btnVoltar15"><i
                            class="bi bi-arrow-left-short"></i> Voltar </button>
                    <button type="button" class="btn btn-warning btn-sm mx-5 btnReniciar"> Reiniciar Teste <i
                            class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="btn btn-primary btn-lg mx-5" id="finalizar"> Finalizar <i
                            class="bi bi-arrow-right-short"></i></button>
                </div>
            </div>
        </section>
    </form>

    <!--Seção 16-->
    <section id="section16" class="my-5">
        <div class="card">
            <div class="px-3 py-5 my-5 text-center">
                <i class="bi bi-emoji-laughing" style="font-size: 5rem;"></i>
                <h1 class="display-5 fw-bold">Teste Finalizado com Sucesso</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                        grid system, extensive prebuilt components, and
                        powerful JavaScript plugins.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                        impedit, laudantium, dolores atque consectetur quo possimus praesentium ratione blanditiis numquam
                        nam saepe! Facilis corporis
                        eaque amet quam hic dignissimos ratione.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container"><div><p><br></p></div></section>

@stop

@section('js1')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/function.js"></script>
@stop

@section('js2')

@stop

@section('css')
    <link rel="stylesheet" href="assets/css/style.css" />
@stop
