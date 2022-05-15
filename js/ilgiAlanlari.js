async function ilyas() {
    const response = await fetch("https://www.breakingbadapi.com/api/characters");
    const dataCollect = await response.json();

    var num1=Math.floor(Math.random() * 62);
    var num2=Math.floor(Math.random() * 62);
    var num3=Math.floor(Math.random() * 62);

    console.log(dataCollect);

    document.querySelector("#resim1").src = dataCollect[0].img;
    document.querySelector("#ad1").innerHTML = dataCollect[0].name;
    document.querySelector("#meslek1").innerHTML = dataCollect[0].occupation;
    document.querySelector("#resim2").src = dataCollect[1].img;
    document.querySelector("#ad2").innerHTML = dataCollect[1].name;
    document.querySelector("#meslek2").innerHTML = dataCollect[1].occupation;
    document.querySelector("#resim3").src = dataCollect[8].img;
    document.querySelector("#ad3").innerHTML = dataCollect[8].name;
    document.querySelector("#meslek3").innerHTML = dataCollect[8].occupation;
    document.querySelector("#resim4").src = dataCollect[num1].img;
    document.querySelector("#ad4").innerHTML = dataCollect[num1].name;
    document.querySelector("#meslek4").innerHTML = dataCollect[num1].occupation;
    document.querySelector("#resim5").src = dataCollect[num2].img;
    document.querySelector("#ad5").innerHTML = dataCollect[num2].name;
    document.querySelector("#meslek5").innerHTML = dataCollect[num2].occupation;
    document.querySelector("#resim6").src = dataCollect[num3].img;
    document.querySelector("#ad6").innerHTML = dataCollect[num3].name;
    document.querySelector("#meslek6").innerHTML = dataCollect[num3].occupation;

}
ilyas();