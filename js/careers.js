let colCard = document.querySelectorAll('.col-card');

for (i = 0; i < colCard.length; i++) {
    console.log(colCard[i]);
    colCard[i].addEventListener('click', colClick);

    function colClick() {
        colCardClick(this);
    }
}

let colCardClick = (elem) => {
    // console.log(elem.id);
    colCardID = elem.id;
    colCardMain = colCardID.replace(`card`, 'col-main-details');
    // console.log(colCardMain);
    colCardElem = document.querySelector(`#${colCardID}`);
    colCardMainDetails = document.querySelector(`#${colCardMain}`);
    colCardActive = document.querySelector(`.col-card-active`);
    colCardMainDetailsActive = document.querySelector(`.col-main-details.active`);

    // console.log(colCardElem);

    colCardMainDetails.classList.add('active');
    elem.classList.add('col-card-active');

    colCardMainDetailsActive.classList.remove('active');
    colCardActive.classList.remove('col-card-active');
}