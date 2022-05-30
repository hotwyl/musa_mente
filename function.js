$(document).ready(function() {
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
    $('#section16').hide();

    //leitura de respostas
    // $('input').change(function (v) {
    // });

    //ação botão reniciar
    $('.btnReniciar').click(function() {
        $(location).attr('href', 'index.html');
        $(window).attr('location', 'index.html');
        $(location).prop('href', 'index.html');
        // window.location.reload(true);
    });

    $('#btnAvancar0').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 1
    $('#btnAvancar1').click(function() {
        if ($("input[name='s1q1']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question1 = null;
            if (Number(question1) != null) {
                $("input[name='s1q1']:checked").each(function() {
                    question1 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s1q2']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question2 = null;
            if (Number(question2) != null) {
                $("input[name='s1q2']:checked").each(function() {
                    question2 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s1q3']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question3 = null;
            if (Number(question3) != null) {
                $("input[name='s1q3']:checked").each(function() {
                    question3 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s1q4']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question4 = null;
            if (Number(question4) != null) {
                $("input[name='s1q4']:checked").each(function() {
                    question4 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s1q5']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question5 = null;
            if (Number(question5) != null) {
                $("input[name='s1q5']:checked").each(function() {
                    question5 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s1q6']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão F',
                text: 'Selecione uma das opções válida para questão F.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question6 = null;
            if (Number(question6) != null) {
                $("input[name='s1q6']:checked").each(function() {
                    question6 = Number($(this).val());
                });
            }
        }

        if (question1 != null && question2 != null && question3 != null && question4 != null && question5 != null && question6 != null) {
            var section1 = Number(Number(question1) + Number(question2) + Number(question3) + Number(question4) + Number(question5) + Number(question6));
            $("input[name='section1']").val(section1);
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
        $('#section16').hide();
    });

    //ação botão voltar seção 2
    $('#btnVoltar2').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 2
    $('#btnAvancar2').click(function() {
        if ($("input[name='s2q7']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question7 = null;
            if (Number(question7) != null) {
                $("input[name='s2q7']:checked").each(function() {
                    question7 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s2q8']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question8 = null;
            if (Number(question8) != null) {
                $("input[name='s2q8']:checked").each(function() {
                    question8 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s2q9']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question9 = null;
            if (Number(question9) != null) {
                $("input[name='s2q9']:checked").each(function() {
                    question9 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s2q10']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question10 = null;
            if (Number(question10) != null) {
                $("input[name='s2q10']:checked").each(function() {
                    question10 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s2q11']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question11 = null;
            if (Number(question11) != null) {
                $("input[name='s2q11']:checked").each(function() {
                    question11 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s2q12']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão F',
                text: 'Selecione uma das opções válida para questão F.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question12 = null;
            if (Number(question12) != null) {
                $("input[name='s2q12']:checked").each(function() {
                    question12 = Number($(this).val());
                });
            }
        }

        if (question7 != null && question8 != null && question9 != null && question10 != null && question11 != null && question12 != null) {
            var section2 = Number(Number(question7) + Number(question8) + Number(question9) + Number(question10) + Number(question11) + Number(question12));
            $("input[name='section2']").val(section2);
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
        $('#section16').hide();
    });

    //ação botão voltar seção 3
    $('#btnVoltar3').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 3
    $('#btnAvancar3').click(function() {

        if ($("input[name='s3q13']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question13 = null;
            if (Number(question13) != null) {
                $("input[name='s3q13']:checked").each(function() {
                    question13 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s3q14']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question14 = null;
            if (Number(question14) != null) {
                $("input[name='s3q14']:checked").each(function() {
                    question14 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s3q15']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question15 = null;
            if (Number(question15) != null) {
                $("input[name='s3q15']:checked").each(function() {
                    question15 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s3q16']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question16 = null;
            if (Number(question16) != null) {
                $("input[name='s3q16']:checked").each(function() {
                    question16 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s3q17']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question17 = null;
            if (Number(question17) != null) {
                $("input[name='s3q17']:checked").each(function() {
                    question17 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s3q18']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question18 = null;
            if (Number(question18) != null) {
                $("input[name='s3q18']:checked").each(function() {
                    question18 = Number($(this).val());
                });
            }
        }

        if (question13 != null && question14 != null && question15 != null && question16 != null && question17 != null && question18 != null) {
            var section3 = Number(Number(question13) + Number(question14) + Number(question15) + Number(question16) + Number(question17) + Number(question18));
            $("input[name='section3']").val(section3);
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
        $('#section16').hide();
    });

    //ação botão voltar seção 4
    $('#btnVoltar4').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 4
    $('#btnAvancar4').click(function() {
        if ($("input[name='s4q19']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question19 = null;
            if (Number(question19) != null) {
                $("input[name='s4q19']:checked").each(function() {
                    question19 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s4q20']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question20 = null;
            if (Number(question20) != null) {
                $("input[name='s4q20']:checked").each(function() {
                    question20 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s4q21']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question21 = null;
            if (Number(question21) != null) {
                $("input[name='s4q21']:checked").each(function() {
                    question21 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s4q22']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question22 = null;
            if (Number(question22) != null) {
                $("input[name='s4q22']:checked").each(function() {
                    question22 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s4q23']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question23 = null;
            if (Number(question23) != null) {
                $("input[name='s4q23']:checked").each(function() {
                    question23 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s4q24']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question24 = null;
            if (Number(question24) != null) {
                $("input[name='s4q24']:checked").each(function() {
                    question24 = Number($(this).val());
                });
            }
        }

        if (question19 != null && question20 != null && question21 != null && question22 != null && question23 != null && question24 != null) {
            var section4 = Number(Number(question19) + Number(question20) + Number(question21) + Number(question22) + Number(question23) + Number(question24));
            $("input[name='section4']").val(section4);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 5
    $('#btnVoltar5').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 5
    $('#btnAvancar5').click(function() {
        if ($("input[name='s5q25']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question25 = null;
            if (Number(question25) != null) {
                $("input[name='s5q25']:checked").each(function() {
                    question25 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s5q26']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question26 = null;
            if (Number(question26) != null) {
                $("input[name='s5q26']:checked").each(function() {
                    question26 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s5q27']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question27 = null;
            if (Number(question27) != null) {
                $("input[name='s5q27']:checked").each(function() {
                    question27 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s5q28']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question28 = null;
            if (Number(question28) != null) {
                $("input[name='s5q28']:checked").each(function() {
                    question28 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s5q29']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question29 = null;
            if (Number(question29) != null) {
                $("input[name='s5q29']:checked").each(function() {
                    question29 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s5q30']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question30 = null;
            if (Number(question30) != null) {
                $("input[name='s5q30']:checked").each(function() {
                    question30 = Number($(this).val());
                });
            }
        }

        if (question25 != null && question26 != null && question27 != null && question28 != null && question29 != null && question30 != null) {
            var section5 = Number(Number(question25) + Number(question26) + Number(question27) + Number(question28) + Number(question29) + Number(question30));
            $("input[name='section5']").val(section5);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 6
    $('#btnVoltar6').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 6
    $('#btnAvancar6').click(function() {
        if ($("input[name='s6q31']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question31 = null;
            if (Number(question31) != null) {
                $("input[name='s6q31']:checked").each(function() {
                    question31 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s6q32']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question32 = null;
            if (Number(question32) != null) {
                $("input[name='s6q32']:checked").each(function() {
                    question32 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s6q33']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question33 = null;
            if (Number(question33) != null) {
                $("input[name='s6q33']:checked").each(function() {
                    question33 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s6q34']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question34 = null;
            if (Number(question34) != null) {
                $("input[name='s6q34']:checked").each(function() {
                    question34 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s6q35']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question35 = null;
            if (Number(question35) != null) {
                $("input[name='s6q35']:checked").each(function() {
                    question35 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s6q36']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question36 = null;
            if (Number(question36) != null) {
                $("input[name='s6q36']:checked").each(function() {
                    question36 = Number($(this).val());
                });
            }
        }

        if (question31 != null && question32 != null && question33 != null && question34 != null && question35 != null && question36 != null) {
            var section6 = Number(Number(question31) + Number(question32) + Number(question33) + Number(question34) + Number(question35) + Number(question36));
            $("input[name='section6']").val(section6);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 7
    $('#btnVoltar7').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 7
    $('#btnAvancar7').click(function() {

        if ($("input[name='s7q37']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question37 = null;
            if (Number(question37) != null) {
                $("input[name='s7q37']:checked").each(function() {
                    question37 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s7q38']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question38 = null;
            if (Number(question38) != null) {
                $("input[name='s7q38']:checked").each(function() {
                    question38 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s7q39']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question39 = null;
            if (Number(question39) != null) {
                $("input[name='s7q39']:checked").each(function() {
                    question39 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s7q40']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question40 = null;
            if (Number(question40) != null) {
                $("input[name='s7q40']:checked").each(function() {
                    question40 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s7q41']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question41 = null;
            if (Number(question41) != null) {
                $("input[name='s7q41']:checked").each(function() {
                    question41 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s7q42']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question42 = null;
            if (Number(question42) != null) {
                $("input[name='s7q42']:checked").each(function() {
                    question42 = Number($(this).val());
                });
            }
        }

        if (question37 != null && question38 != null && question39 != null && question40 != null && question41 != null && question42 != null) {
            var section7 = Number(Number(question37) + Number(question38) + Number(question39) + Number(question40) + Number(question41) + Number(question42));
            $("input[name='section7']").val(section7);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 8
    $('#btnVoltar8').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 8
    $('#btnAvancar8').click(function() {
        if ($("input[name='s8q43']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question43 = null;
            if (Number(question43) != null) {
                $("input[name='s8q43']:checked").each(function() {
                    question43 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s8q44']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question44 = null;
            if (Number(question44) != null) {
                $("input[name='s8q44']:checked").each(function() {
                    question44 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s8q45']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question45 = null;
            if (Number(question45) != null) {
                $("input[name='s8q45']:checked").each(function() {
                    question45 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s8q46']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question46 = null;
            if (Number(question46) != null) {
                $("input[name='s8q46']:checked").each(function() {
                    question46 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s8q47']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question47 = null;
            if (Number(question47) != null) {
                $("input[name='s8q47']:checked").each(function() {
                    question47 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s8q48']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question48 = null;
            if (Number(question48) != null) {
                $("input[name='s8q48']:checked").each(function() {
                    question48 = Number($(this).val());
                });
            }
        }

        if (question43 != null && question44 != null && question45 != null && question46 != null && question47 != null && question48 != null) {
            var section8 = Number(Number(question43) + Number(question44) + Number(question45) + Number(question46) + Number(question47) + Number(question48));
            $("input[name='section8']").val(section8);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 9
    $('#btnVoltar9').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 9
    $('#btnAvancar9').click(function() {

        if ($("input[name='s9q49']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question49 = null;
            if (Number(question49) != null) {
                $("input[name='s9q49']:checked").each(function() {
                    question49 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s9q50']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question50 = null;
            if (Number(question50) != null) {
                $("input[name='s9q50']:checked").each(function() {
                    question50 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s9q51']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question51 = null;
            if (Number(question51) != null) {
                $("input[name='s9q51']:checked").each(function() {
                    question51 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s9q52']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question52 = null;
            if (Number(question52) != null) {
                $("input[name='s9q52']:checked").each(function() {
                    question52 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s9q53']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question53 = null;
            if (Number(question53) != null) {
                $("input[name='s9q53']:checked").each(function() {
                    question53 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s9q54']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question54 = null;
            if (Number(question54) != null) {
                $("input[name='s9q54']:checked").each(function() {
                    question54 = Number($(this).val());
                });
            }
        }

        if (question49 != null && question50 != null && question51 != null && question52 != null && question53 != null && question54 != null) {
            var section9 = Number(Number(question49) + Number(question50) + Number(question51) + Number(question52) + Number(question53) + Number(question54));
            $("input[name='section9']").val(section9);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 10
    $('#btnVoltar10').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 10
    $('#btnAvancar10').click(function() {
        if ($("input[name='s10q55']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question55 = null;
            if (Number(question55) != null) {
                $("input[name='s10q55']:checked").each(function() {
                    question55 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s10q56']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question56 = null;
            if (Number(question56) != null) {
                $("input[name='s10q56']:checked").each(function() {
                    question56 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s10q57']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question57 = null;
            if (Number(question57) != null) {
                $("input[name='s10q57']:checked").each(function() {
                    question57 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s10q58']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question58 = null;
            if (Number(question58) != null) {
                $("input[name='s10q58']:checked").each(function() {
                    question58 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s10q59']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question59 = null;
            if (Number(question59) != null) {
                $("input[name='s10q59']:checked").each(function() {
                    question59 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s10q60']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question60 = null;
            if (Number(question60) != null) {
                $("input[name='s10q60']:checked").each(function() {
                    question60 = Number($(this).val());
                });
            }
        }

        if (question55 != null && question56 != null && question57 != null && question58 != null && question59 != null && question60 != null) {
            var section10 = Number(Number(question55) + Number(question56) + Number(question57) + Number(question58) + Number(question59) + Number(question60));
            $("input[name='section10']").val(section10);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 11
    $('#btnVoltar11').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 11
    $('#btnAvancar11').click(function() {
        if ($("input[name='s11q61']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question61 = null;
            if (Number(question61) != null) {
                $("input[name='s11q61']:checked").each(function() {
                    question61 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s11q62']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question62 = null;
            if (Number(question62) != null) {
                $("input[name='s11q62']:checked").each(function() {
                    question62 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s11q63']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question63 = null;
            if (Number(question63) != null) {
                $("input[name='s11q63']:checked").each(function() {
                    question63 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s11q64']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question64 = null;
            if (Number(question64) != null) {
                $("input[name='s11q64']:checked").each(function() {
                    question64 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s11q65']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question65 = null;
            if (Number(question65) != null) {
                $("input[name='s11q65']:checked").each(function() {
                    question65 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s11q66']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question66 = null;
            if (Number(question66) != null) {
                $("input[name='s11q66']:checked").each(function() {
                    question66 = Number($(this).val());
                });
            }
        }

        if (question61 != null && question62 != null && question63 != null && question64 != null && question65 != null && question66 != null) {
            var section11 = Number(Number(question61) + Number(question62) + Number(question63) + Number(question64) + Number(question65) + Number(question66));
            $("input[name='section11']").val(section11);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 12
    $('#btnVoltar12').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 12
    $('#btnAvancar12').click(function() {
        if ($("input[name='s12q67']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question67 = null;
            if (Number(question67) != null) {
                $("input[name='s12q67']:checked").each(function() {
                    question67 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s12q68']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question68 = null;
            if (Number(question68) != null) {
                $("input[name='s12q68']:checked").each(function() {
                    question68 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s12q69']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question69 = null;
            if (Number(question69) != null) {
                $("input[name='s12q69']:checked").each(function() {
                    question69 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s12q70']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question70 = null;
            if (Number(question70) != null) {
                $("input[name='s12q70']:checked").each(function() {
                    question70 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s12q71']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question71 = null;
            if (Number(question71) != null) {
                $("input[name='s12q71']:checked").each(function() {
                    question71 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s12q72']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question72 = null;
            if (Number(question72) != null) {
                $("input[name='s12q72']:checked").each(function() {
                    question72 = Number($(this).val());
                });
            }
        }

        if (question67 != null && question68 != null && question69 != null && question70 != null && question71 != null && question72 != null) {
            var section12 = Number(Number(question67) + Number(question68) + Number(question69) + Number(question70) + Number(question71) + Number(question72));
            $("input[name='section12']").val(section12);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 13
    $('#btnVoltar12').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 13
    $('#btnAvancar13').click(function() {
        if ($("input[name='s13q73']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question73 = null;
            if (Number(question73) != null) {
                $("input[name='s13q73']:checked").each(function() {
                    question73 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s13q74']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question74 = null;
            if (Number(question74) != null) {
                $("input[name='s13q74']:checked").each(function() {
                    question74 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s13q75']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question75 = null;
            if (Number(question75) != null) {
                $("input[name='s13q75']:checked").each(function() {
                    question75 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s13q76']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question76 = null;
            if (Number(question76) != null) {
                $("input[name='s13q76']:checked").each(function() {
                    question76 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s13q77']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question77 = null;
            if (Number(question77) != null) {
                $("input[name='s13q77']:checked").each(function() {
                    question77 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s13q78']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question78 = null;
            if (Number(question78) != null) {
                $("input[name='s13q78']:checked").each(function() {
                    question78 = Number($(this).val());
                });
            }
        }

        if (question73 != null && question74 != null && question75 != null && question76 != null && question77 != null && question78 != null) {
            var section13 = Number(Number(question73) + Number(question74) + Number(question75) + Number(question76) + Number(question77) + Number(question78));
            $("input[name='section13']").val(section13);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 14
    $('#btnVoltar14').click(function() {
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
        $('#section16').hide();
    });

    //ação botão avançar seção 14
    $('#btnAvancar14').click(function() {
        if ($("input[name='s14q79']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão A',
                text: 'Selecione uma das opções válida para questão A.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question79 = null;
            if (Number(question79) != null) {
                $("input[name='s14q79']:checked").each(function() {
                    question79 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s14q80']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão B',
                text: 'Selecione uma das opções válida para questão B.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question80 = null;
            if (Number(question80) != null) {
                $("input[name='s14q80']:checked").each(function() {
                    question80 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s14q81']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão C',
                text: 'Selecione uma das opções válida para questão C.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question81 = null;
            if (Number(question81) != null) {
                $("input[name='s14q81']:checked").each(function() {
                    question81 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s14q82']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão D',
                text: 'Selecione uma das opções válida para questão D.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question82 = null;
            if (Number(question82) != null) {
                $("input[name='s14q82']:checked").each(function() {
                    question82 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s14q83']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question83 = null;
            if (Number(question83) != null) {
                $("input[name='s14q83']:checked").each(function() {
                    question83 = Number($(this).val());
                });
            }
        }

        if ($("input[name='s14q84']:checked").val() == undefined) {
            Swal.fire({
                title: 'Selecione uma resposta para questão E',
                text: 'Selecione uma das opções válida para questão E.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var question84 = null;
            if (Number(question84) != null) {
                $("input[name='s14q84']:checked").each(function() {
                    question84 = Number($(this).val());
                });
            }
        }

        if (question79 != null && question80 != null && question81 != null && question82 != null && question83 != null && question84 != null) {
            var section14 = Number(Number(question79) + Number(question80) + Number(question81) + Number(question82) + Number(question83) + Number(question84));
            $("input[name='section14']").val(section14);
        }

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
        $('#section16').hide();
    });

    //ação botão voltar seção 15
    $('#btnVoltar15').click(function() {
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
        $('#section16').hide();
    });

    // ação botão finalizar seção 15
    $('#finalizar').click(function() {
        var section15 = null;
        var resultadoTeste = null;

        if ($("input[name='email']").val() == undefined) {
            Swal.fire({
                title: 'Endereço de Email não identificado',
                text: 'Informe um email para receber o resultado do teste.',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
            })
            return false;
        } else {
            var email = $("input[name='email']").val();
            section1 = $("input[name='section1']").val();
            section2 = $("input[name='section2']").val();
            section3 = $("input[name='section3']").val();
            section4 = $("input[name='section4']").val();
            section5 = $("input[name='section5']").val();
            section6 = $("input[name='section6']").val();
            section7 = $("input[name='section7']").val();
            section8 = $("input[name='section8']").val();
            section9 = $("input[name='section9']").val();
            section10 = $("input[name='section10']").val();
            section11 = $("input[name='section11']").val();
            section12 = $("input[name='section12']").val();
            section13 = $("input[name='section13']").val();
            section14 = $("input[name='section14']").val();
        }

        if (section1 != null && section2 != null && section3 != null && section4 != null && section5 != null && section6 != null && section7 != null && section8 != null && section9 != null && section10 != null && section11 != null && section12 != null && section13 != null && section14 != null) {
            var resultadoTeste = Number(Number(section1) + Number(section2) + Number(section3) + Number(section4) + Number(section5) + Number(section6) + Number(section7) + Number(section8) + Number(section9) + Number(section10) + Number(section11) + Number(section12) + Number(section13) + Number(section14));

            console.log('seção 1 = ' + section1);
            console.log('seção 2 = ' + section2);
            console.log('seção 3 = ' + section3);
            console.log('seção 4 = ' + section4);
            console.log('seção 5 = ' + section5);
            console.log('seção 6 = ' + section6);
            console.log('seção 7 = ' + section7);
            console.log('seção 8 = ' + section8);
            console.log('seção 9 = ' + section9);
            console.log('seção 10 = ' + section10);
            console.log('seção 11 = ' + section11);
            console.log('seção 12 = ' + section12);
            console.log('seção 13 = ' + section13);
            console.log('seção 14 = ' + section14);
            console.log('Resultado teste = ' + resultadoTeste);
            console.log('Endereço de email = ' + email);
        }

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
        $('#section15').hide();
        $('#section16').show();
    });

});