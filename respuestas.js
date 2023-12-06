function resultado() {
    var p1, p2, p3, p4, p5, p6, nota;

    // 1a pregunta
    if (document.getElementById('p11').checked==true) {p1=2}
    else {p1=0}
    // 2a pregunta
    if (document.getElementById('p24').checked==true) {p2=2}
    else {p2=0}
    // 3a pregunta
    if (document.getElementById('p33').checked==true) {p3=1}
    else {p3=0}
    // 4a pregunta
    if (document.getElementById('p41').checked==true) {p4=2}
    else {p4=0}
    // 5a pregunta
    if (document.getElementById('p52').checked==true) {p5=2}
    else {p5=0}
    // 6a pregunta
    if (document.getElementById('p61').checked==true) {p6=1}
    else {p6=0}
   

    nota=p1+p2+p3+p4+p5+p6;
    alert(" Aciertos: " + nota);
    window.location = 'cuestionarioP.php'
}