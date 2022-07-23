@extends('layout')

@section('title', 'TESTE DAS DEUSAS')

@section('content')

    <section class="my-3 text-center">
        <div class="alert alert-secondary" role="alert">
            <h3>Resultado TESTE DAS DEUSAS <?= $resultado->nome ?></h3>
        </div>
    </section>

    <section class="my-5">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body p-5">
                <div class="pb-5">
                    <div id="grafico" style="width: 900px; height: 500px;"></div>
                </div>
                <!-- imagem -->

                <p class="card-text"> Seu gráfico com a Deusa dominante. Aquela que mais se conecta com você! Mais as
                    porcentagens de cada Deusa que existe em seu comportamento atual... </p>

                <p class="card-text"> <b>É o início de seu autoconhecimento</b> para ter mais liberdade em ser você mesma.
                </p>

                <h5 class="card-title">ENTENDA MELHOR...</h5>

                <p class="card-text"> As deusas gregas são imagens de mulheres que viveram na imaginação humana por mais de
                    três mil anos. </p>

                <p class="card-text"> As deusas são modelos ou representações daquilo que as mulheres se assemelham. </p>

                <!-- imagem -->

                <p class="card-text"> Na Grécia antiga as mulheres sabiam que sua vocação ou profissão as colocava sob o
                    domínio de uma determinada Deusa a quem elas veneravam. </p>

                <p class="card-text"> Todas as deusas são padrões potenciais na psique das mulheres.” Jean Shinoda Bolen
                </p>

                <p class="card-title"> As principais características das 6 principais Deusas são: </p>

                <p class="card-text"> <b>A MULHER-ATENA</b> é regida pela deusa da sabedoria e da civilização; ela busca a
                    realização profissional numa carreira, envolvendo-se com educação, cultura intelectual, justiça social e
                    com política. </p>

                <p class="card-text"> <b>A MULHER-AFRODITE</b> é regida pela deusa do amor, e está voltada principalmente
                    para relacionamentos humanos, sexualidade, intriga, romance, beleza e inspiração das artes. </p>

                <p class="card-text"> <b>A MULHER-PERSÓFONE</b> é regida pela deusa do mundo avernal (submundo); ela é
                    mediúnica e atraída pelo mundo espiritual, pelo oculto, pelas experiências místicas e visionárias, e
                    pelas questões ligadas a morte. </p>

                <p class="card-text"> <b>A MULHER-ÁRTEMIS</b> é regida pela deusa das selvas; ela é prática, atlética,
                    aventureira; aprecia a cultura física, a solidão, vida ao ar livre e os animais; dedica-se à proteção do
                    meio ambiente, aos estilos de vida alternativos e às comunidades de mulheres. </p>

                <p class="card-text"> <b>A Mulher Deméter</b> é regida pela deusa das colheitas; ela é uma verdadeira mãe
                    terra que gosta de estar grávida, de amamentar e de cuidar de crianças; está envolvida com todos os
                    aspectos do nascimento e com os ciclos reprodutivos da mulher. </p>

                <p class="card-text"> <b>A Mulher Hera</b> é regida pela deusa dos céus; ela se ocupa do casamento, da
                    convivência com o homem e, sempre que as mulheres são líderes ou governantes, de questões ligadas ao
                    poder. </p>

                <p class="card-text"> FONTE: Do livro: A Deusa Interior de Jennifer Barker Woolger e Roger J. Woolger </p>

                <p class="card-text"> Os arquétipos de cada Deusa a seguir, São importantes conceitos sobre o significado de
                    <b><i>arquétipo</i></b>, que é termo bastante utilizado pela psicologia Junguiana.
                </p>

                <p class="card-text"> <i>“Arquétipo é um conjunto de imagens psíquicas presentes no inconsciente coletivo
                        que seria a parte mais profunda do inconsciente humano. Os arquétipos são herdados geneticamente dos
                        ancestrais de um grupo de civilização, etnia ou povo. Os arquétipos não são memórias coesas e
                        “palpáveis” no contexto ou definição clássica de memória, mas são o conjunto de informações
                        inconscientes que motivam o ser humano a acreditar ou dar crédito a determinados tipos de
                        comportamento. Os arquétipos correspondem ao conjunto de crenças e valores comportamentais básicos
                        do ser humano, <b>podem se manifestar nas crenças religiosas, mitológicas ou no comportamento
                            inconsciente do indivíduo.</b>”</i> Dicionário Informal </p>

                <!-- imagem -->

                <h5 class="card-title"> Os arquétipos de cada deusa e o Caminho para o Crescimento: </h5>

                <p class="card-text"> <b>ATENA</b> – Seu arquétipo é a mente lógica, governada mais pela razão do que pelo
                    coração. O seu caminho para o crescimento se dá em 3 questões específicas: </p>

                <p class="card-text">
                <ol>
                    <li><b>Voltar-se para seu interior:</b> Uma frase que demonstra Atenas é “Minha cabeça está sempre
                        funcionando”. Ela sempre está ativa e usando da razão, por isso, é imprescindível, que pare um pouco
                        e olhe para dentro de si mesmo e amplie seu autoconhecimento.</li>
                    <li><b>Recupera a criança:</b> Já que para Atenas “Ser esperta a respeito de tudo” é algo bem marcante;
                        ela acaba por deixar de ser criança para ser adulta muito precocemente, portanto, deixar espaço para
                        sua criança interior agir, ou seja, se permitir ser cuidada, brincar, rir, chorar, ouvir os outros e
                        aprender com as experiências dos mesmos.</li>
                    <li><b>Descobrir a mãe:</b> Entrar em contato com a energia da sua própria mãe é imprescindível, já que
                        ela, foi criada somente pelo seu pai e não ter valorizado e honrado sua própria mãe.</li>
                </ol>
                </p>

                <p class="card-text"> <b>AFRODITE</b> – Seu arquétipo é guiar e controlar o prazer do amor e da beleza, da
                    sexualidade e da sensualidade. O seu caminho para o crescimento é levar a consciência sua característica
                    predominante e se relacionar com ela de forma saudável, de modo que não se reprima e nem se frustre ao
                    se envolver com os outros. </p>

                <p class="card-text"> <b>PERSÓFONE</b> – Seu arquétipo refere-se a característica de ser compreensiva nas
                    ações dos
                    outros, além de não tomar atitudes por si própria, e depender de outras pessoas. O seu caminho para o
                    crescimento é responder e cuidar da sua própria vida. </p>

                <p class="card-text"> <b>ÁRTEMIS</b> – Seu arquétipo é o espírito feminino independente, refere-se a
                    possibilidade da
                    mulher se relacionar com seus próprios objetivos e tomar suas próprias decisões. O seu caminho para o
                    crescimento está diretamente relacionado com o fato dela ser receptiva, aberta para os relacionamentos
                    amorosos, uma vez que sua característica marcante é a independência. </p>

                <p class="card-text"> <b>DEMÉTER</b> – Seu arquétipo é o materno. O seu caminho para o crescimento, está
                    profundamente ligado à sua dificuldade em dizer “não”, a ser generosa com tudo e todos, igualmente como
                    uma boa mãe. Consequentemente, tem bloqueio em perceber seus pontos negativos e dar a oportunidade de
                    mudar, de crescer e se desenvolver. </p>

                <p class="card-text"> <b>HERA</b> – Seu arquétipo é o desejo de se tornar esposa, quando está sozinha
                    sente-se
                    incompleta. </p>

                <p class="card-text"> O seu caminho para o crescimento, em virtude disso, seria pensar antes de se envolver
                    amorosamente com alguém. </p>

                <p class="card-text"> <b>FONTE:</b> do livro: As Deusas e a Mulher de Jean Shinoda Bolen </p>

                <p class="card-text"> Parabéns! Você é uma buscadora, e quem busca... encontra! </p>

                <p class="card-text"> Não 'seje' burraaaa, seja Musa. </p>

                <p class="card-text">🌛S.S.M.🌜🦇<br>Aline Lachovski<br>Musa Anfitriã - Criadora do Musa da
                    Mente<br><a href="mailto:contato@musadamente.com.br" target="_blank">contato@musadamente.com.br</a> </p>

                <p class="text-center"> <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.print();">CLIQUE E GERE SEU RESULTADO EM PDF</button> </p>
            </div>
            <div class="card-footer"></div>
        </div>
    </section>
@stop

@section('js1')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['Resultado Teste <?= $resultado->nome ?>', 'Resultado Teste <?= $resultado->nome ?>'],
                ["Atena ( <?= intval($resultado->atena) ?> ) ", <?= intval($resultado->atena) ?>],
                ["Afrodite ( <?= intval($resultado->afrodite) ?> ) ", <?= intval($resultado->afrodite) ?>],
                ["Persefone ( <?= intval($resultado->persefone) ?> ) ", <?= intval($resultado->persefone) ?>],
                ["Artemis ( <?= intval($resultado->artemis) ?> ) ", <?= intval($resultado->artemis) ?>],
                ['Demeter ( <?= intval($resultado->demeter) ?> ) ', <?= intval($resultado->demeter) ?>],
                ['Hera ( <?= intval($resultado->hera) ?> ) ', <?= intval($resultado->hera) ?>]
            ]);

            var options = {
                title: '',
                width: 1024,
                legend: {
                    position: 'none'
                },
                chart: {
                    title: '',
                    subtitle: ''
                },
                bars: 'horizontal', // Required for Material Bar Charts.
                axes: {
                    x: {
                        0: {
                            side: 'top',
                            label: 'Resultado Teste <?= $resultado->nome ?>'
                        } // Top x-axis.
                    }
                },
                bar: {
                    groupWidth: "100%"
                }
            };

            var chart = new google.charts.Bar(document.getElementById('grafico'));
            chart.draw(data, options);
        };
    </script>

@stop
