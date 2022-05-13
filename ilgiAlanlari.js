async function ilyas() {
    const response = await fetch("https://www.breakingbadapi.com/api/characters");
    const dataCollect = await response.json();

    console.log(dataCollect);

    document.querySelector("#resim").src = dataCollect[0].img;
}
ilyas();