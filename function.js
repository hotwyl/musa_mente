$(document).ready(function () {
    $('#section0').show();
    $('#section1').hide();
    $('#section2').hide();
    $('#section3').hide();
    $('#section4').hide();
    $('#section5').hide();
    $('#section6').hide();
    $('#section7').hide();
    $('#section8').hide();
    $('#section9').hide();
    $('#section10').hide();
    $('#section11').hide();
    $('#section12').hide();
    $('#section13').hide();
    $('#section14').hide();
    $('#section15').hide();

    //leitura de respostas
    // $('input').change(function (v) {
    // });

    //ação botão reniciar
    $('.btnReniciar').click(function(){
        $(location).attr('href','index.html');
        $(window).attr('location','index.html');
        $(location).prop('href', 'index.html');
        // window.location.reload(true);
    });

    $('#btnAvancar0').click(function(){
        $('#section0').hide();
        $('#section1').show();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();

    });

    //ação botão avançar seção 1
    $('#btnAvancar1').click(function(){

        if($("input[name='s1q1']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question1 = null;
            if (Number(question1) != null) {
                $("input[name='s1q1']:checked").each(function () {
                    question1 = Number($(this).val());
                });
            }
        }
        
        if($("input[name='s1q2']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question2 = null;
            if (Number(question2) != null) {
                $("input[name='s1q2']:checked").each(function () {
                    question2 = Number($(this).val());
                });
            }
        }
        
        if($("input[name='s1q3']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question3 = null;
            if (Number(question3) != null) {
                $("input[name='s1q3']:checked").each(function () {
                    question3 = Number($(this).val());
                });
            }
        }

        if($("input[name='s1q4']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question4 = null;
            if (Number(question4) != null) {
                $("input[name='s1q4']:checked").each(function () {
                    question4 = Number($(this).val());
                });
            }
        }

        if($("input[name='s1q5']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question5 = null;
            if (Number(question5) != null) {
                $("input[name='s1q5']:checked").each(function () {
                    question5 = Number($(this).val());
                });
            }
        }
        
        if($("input[name='s1q6']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão F',
                text: 'Selecione uma das opções válida para questão F.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question6 = null;
            if (Number(question6) != null) {
                $("input[name='s1q6']:checked").each(function () {
                    question6 = Number($(this).val());
                });
            }
        }        

        if (question1 != null && question2 != null && question3 != null && question4 != null && question5 != null && question6 != null) {
            var section1 = null;
            section1 = Number(Number(question1) + Number(question2) + Number(question3) + Number(question4) + Number(question5) + Number(question6));
            console.log('seção 1 = ' + section1);
        }

        $('#section0').hide();
        $('#section1').hide();
        $('#section2').show();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();

    });
    
    //ação botão voltar seção 2
    $('#btnVoltar2').click(function(){
        $('#section0').hide();
        $('#section1').show();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 2
    $('#btnAvancar2').click(function(){

        if($("input[name='s2q7']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question7 = null;
            if (Number(question7) != null) {
                $("input[name='s2q7']:checked").each(function () {
                    question7 = Number($(this).val());
                });
            }
        }

        if($("input[name='s2q8']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question8 = null;
            if (Number(question8) != null) {
                $("input[name='s2q8']:checked").each(function () {
                    question8 = Number($(this).val());
                });
            }
        }
        
        if($("input[name='s2q9']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question9 = null;
            if (Number(question9) != null) {
                $("input[name='s2q9']:checked").each(function () {
                    question9 = Number($(this).val());
                });
            }
        }

        if($("input[name='s2q10']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question10 = null;
            if (Number(question10) != null) {
                $("input[name='s2q10']:checked").each(function () {
                    question10 = Number($(this).val());
                });
            }
        }

        if($("input[name='s2q11']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question11 = null;
            if (Number(question11) != null) {
                $("input[name='s2q11']:checked").each(function () {
                    question11 = Number($(this).val());
                });
            }
        }

        if($("input[name='s2q12']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão F',
                text: 'Selecione uma das opções válida para questão F.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question12 = null;
            if (Number(question12) != null) {
                $("input[name='s2q12']:checked").each(function () {
                    question12 = Number($(this).val());
                });
            }
        }
 
        if (question7 != null && question8 != null && question9 != null && question10 != null && question11 != null && question12 != null) {
            var section2 = null;
            section2 = Number(Number(question7) + Number(question8) + Number(question9) + Number(question10) + Number(question11) + Number(question12));
            console.log('seção 2 = ' + section2);
        }
        
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').show();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 3
    $('#btnVoltar3').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').show();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 3
    $('#btnAvancar3').click(function(){
 
        if($("input[name='s3q13']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question13 = null;
            if (Number(question13) != null) {
                $("input[name='s3q13']:checked").each(function () {
                    question13 = Number($(this).val());
                });
            }
        }

        if($("input[name='s3q14']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question14 = null;
            if (Number(question14) != null) {
                $("input[name='s3q14']:checked").each(function () {
                    question14 = Number($(this).val());
                });
            }
        }

        if($("input[name='s3q15']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question15 = null;
            if (Number(question15) != null) {
                $("input[name='s3q15']:checked").each(function () {
                    question15 = Number($(this).val());
                });
            }
        }

        if($("input[name='s3q16']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question16 = null;
            if (Number(question16) != null) {
                $("input[name='s3q16']:checked").each(function () {
                    question16 = Number($(this).val());
                });
            }
        }

        if($("input[name='s3q17']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question17 = null;
            if (Number(question17) != null) {
                $("input[name='s3q17']:checked").each(function () {
                    question17 = Number($(this).val());
                });
            }
        }

        if($("input[name='s3q18']:checked").val()==undefined){
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        }else{
            var question18 = null;
            if (Number(question18) != null) {
                $("input[name='s3q18']:checked").each(function () {
                    question18 = Number($(this).val());
                });
            }
        }

        if (question13 != null && question14 != null && question15 != null && question16 != null && question17 != null && question18 != null) {
            var section3 = null;
            section3 = Number(Number(question13) + Number(question14) + Number(questio15) + Number(question16) + Number(question17) + Number(question18));
            console.log('seção 3 = ' + section3);
        }

        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').show();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 4
    $('#btnVoltar4').click(function(){
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').show();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 4
    $('#btnAvancar4').click(function(){
        
        var section4 = null;
        var question19 = null;
        var question20 = null;
        var question21 = null;
        var question22 = null;
        var question23 = null;
        var question24 = null;

        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').show();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 5
    $('#btnVoltar5').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').show();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 5
    $('#btnAvancar5').click(function(){
        var section5 = null;
        var question25 = null;
        var question26 = null;
        var question27 = null;
        var question28 = null;
        var question29 = null;
        var question30 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').show();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 6
    $('#btnVoltar6').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').show();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 6
    $('#btnAvancar6').click(function(){
        var section6 = null;
        var question31 = null;
        var question32 = null;
        var question33 = null;
        var question34 = null;
        var question35 = null;
        var question36 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').show();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });
    
    //ação botão voltar seção 7
    $('#btnVoltar7').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').show();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 7
    $('#btnAvancar7').click(function(){
        var section7 = null;
        var question37 = null;
        var question38 = null;
        var question39 = null;
        var question40 = null;
        var question41 = null;
        var question42 = null; 
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').show();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 8
    $('#btnVoltar8').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').show();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 8
    $('#btnAvancar8').click(function(){
        var section8 = null;
        var question43 = null;
        var question44 = null;
        var question45 = null;
        var question46 = null;
        var question47 = null;
        var question48 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').show();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 9
    $('#btnVoltar9').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').show();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 9
    $('#btnAvancar9').click(function(){
        var section9 = null;
        var question49 = null;
        var question50 = null;
        var question51 = null;
        var question52 = null;
        var question53 = null;
        var question54 = null; 
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').show();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 10
    $('#btnVoltar10').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').show();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 10
    $('#btnAvancar10').click(function(){
        var section10 = null;
        var question55 = null;
        var question56 = null;
        var question57 = null;
        var question58 = null;
        var question59 = null;
        var question60 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').show();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 11
    $('#btnVoltar11').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').show();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 11
    $('#btnAvancar11').click(function(){
        var section11 = null;
        var question61 = null;
        var question62 = null;
        var question63 = null;
        var question64 = null;
        var question65 = null;
        var question66 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').show();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 12
    $('#btnVoltar12').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').show();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 12
    $('#btnAvancar12').click(function(){
        var section12 = null;
        var question67 = null;
        var question68 = null;
        var question69 = null;
        var question70 = null;
        var question71 = null;
        var question72 = null; 
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').show();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão voltar seção 13
    $('#btnVoltar12').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').show();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 13
    $('#btnAvancar13').click(function(){
        var section13 = null;
        var question73 = null;
        var question74 = null;
        var question75 = null;
        var question76 = null;
        var question77 = null;
        var question78 = null;
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').show();
        $('#section15').hide();
    });

    //ação botão voltar seção 14
    $('#btnVoltar14').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').show();
        $('#section14').hide();
        $('#section15').hide();
    });

    //ação botão avançar seção 14
    $('#btnAvancar14').click(function(){
        var section14 = null;
        var question79 = null;
        var question80 = null;
        var question81 = null;
        var question82 = null;
        var question83 = null;
        var question84 = null; 
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').hide();
        $('#section15').show();
    });

    //ação botão voltar seção 15
    $('#btnVoltar15').click(function(){
        $('#section0').hide();
        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();
        $('#section6').hide();
        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();
        $('#section12').hide();
        $('#section13').hide();
        $('#section14').show();
        $('#section15').hide();
    });

    // ação botão finalizar seção 15
    $('#finalizar').click(function(){
        var section15 = null;
        var question85 = null;
        var resultadoTeste = null;
    });

});