const searchBar = document.querySelector(".search input"),
  searchBtn = document.querySelector(".search button");

searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
};




const searchBarFreind = document.querySelector(".searchfreind input"),
  searchfreind = document.querySelector(".searchfreind button");

searchfreind.onclick = () => {
  searchBarFreind.classList.toggle("active");
  searchBarFreind.focus();
  searchfreind.classList.toggle("active");
};




const searchBarlist = document.querySelector(".searchlist input"),
  searchlist = document.querySelector(".searchlist button");

searchlist.onclick = () => {
  searchBarlist.classList.toggle("active");
  searchBarlist.focus();
  searchlist.classList.toggle("active");
};


let menuBox = document.querySelector('.menulist .menu-box');

function menuToggle(){
  if(menuBox.style.display == 'none')
  {
      menuBox.style.display = 'block';
  }
else
  {
      menuBox.style.display = 'none';
  }
}


// const searchBar = document.querySelector(".search input"),
//   searchBtn = document.querySelector(".search button");

// searchBtn.onclick = () => {
//   searchBar.classList.toggle("active");
//   searchBar.focus();
//   searchBtn.classList.toggle("active");
// };

// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

