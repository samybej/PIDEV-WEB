function validerReservation(form) {
    console.log(form)    ;
    if(form.elements['entitiesbundle_reservation_depart'].value ==''  )
    {
        //alert('champ depart est vide');
        document.getElementById('error_message').innerText =  "champ depart est vide !";
        return false ;
    }
    else if (form.elements['entitiesbundle_reservation_depart'].value.match(/\d+/g))
    {
        //alert('champ depart ne doit pas contenir des chiffres');
        document.getElementById('error_message').innerText =  "champ depart ne doit pas contenir des chiffres !";
        return false ;
    }
    if(form.elements['entitiesbundle_reservation_arrive'].value ==''  )
    {
        //alert('champ depart est vide');
        document.getElementById('error_message').innerText =  "champ arrive est vide !";
        return false ;
    }
    else if (form.elements['entitiesbundle_reservation_arrive'].value.match(/\d+/g))
    {
        //alert('champ arrive ne doit pas contenir des chiffres');
        document.getElementById('error_message').innerText =  "champ arrive ne doit pas contenir des chiffres !";
        return false ;
    }
    else{
        return true ;
    }
};

