window.addEventListener('DOMContentLoaded', function() {

    console.log('ここ');

    var buttom = document.getElementById('goBack');

    var goBackAction = () =>{
        console.log('トップに戻るよ');
        window.scrollTo(0,50);
    };

    buttom.addEventListener('click', goBackAction,false);
});
