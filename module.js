let dolarc;
axios.get('https://criptoya.com/api/lemoncash/USDC/ARS/1')
.then(function (response) {
  // handle success
  console.log(response.data.totalAsk);
  return dolarc= response.data;
})
.catch(function (error) {
  // handle error
  console.log(error);
})
.finally(function () {
  // always executed
});

let dolar;
axios.get('https://criptoya.com/api/dolar')
.then(function (response) {
  // handle success
  console.log(response.data.blue);
  return dolarc= response.data;
})
.catch(function (error) {
  // handle error
  console.log(error);
})
.finally(function () {
  // always executed
});

function dolarhoy() {
    console.log(dolar);
}


function dolarchoy() {
    console.log(dolarc);
}

