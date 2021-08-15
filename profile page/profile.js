$(document).ready(function() {
    if($('#profile-name-input').css('border') == 'none'){
        $('#arrow-right').css('display', 'none');
        $('#pencil').click(function(){

            $('#profile-name-input').css('border', '1px solid black');

        })
    }else{
        $('#pencil').css('display','none')
        $('#arrow-right').click(function(){

            $('#profile-name-input').css('border', 'none')

        })
    }
})


//  
// let profileInput = document.getElementsByClassName('.profile-input');
// let btn = document.getElementById('#pencil');

// if(profileInput.style.border === 'none'){
//     btn.addEventListener('click',()=>{
//         profileInput.style.border = 'solid';
//     })
// }else{
//     btn.addEventListener('click',()=>{
//         profileInput.style.border = 'none';
//     })
// }