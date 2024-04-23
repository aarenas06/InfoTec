async function SelectCiu() {
  let selectCiudad = document.getElementById("Ciudad");

  var Pais = $("#Pais").val();
  if (Pais === "") {
    selectCiudad.innerHTML = "";
  }
  let formData = new FormData();
  formData.append("funcion", "SelectCiu");
  formData.append("Pais", Pais);

  try {
    let req2 = await fetch("controller/controller.php", {
      method: "POST",
      body: formData,
    });
    let res2 = await req2.json();
    if (res2) {
      selectCiudad.innerHTML = "";

      res2.forEach((ciudad) => {
        let option = document.createElement("option");
        option.value = ciudad.idCiudad;
        option.textContent = ciudad.CiuNombre;
        selectCiudad.appendChild(option);
      });
    }
  } catch (error) {
    console.error(error);
  }
}
async function SearchInfo() {
  var Pais = $("#Pais").val();
  var Ciudad = $("#Ciudad").val();
  if (Pais === "" || Ciudad === "") {
    Swal.fire({
      icon: "info",
      text: "Los campos Pais y Ciudad Son Obligatorios",
    });
    return;
  }

  let formData = new FormData();
  formData.append("funcion", "GetInfo");
  formData.append("Pais", Pais);
  formData.append("Ciudad", Ciudad);
  try {
    let req2 = await fetch("controller/controller.php", {
      method: "POST",
      body: formData,
    });
    let res2 = await req2.text();
    if (res2) {
      $("#respond").html(res2);
    }
  } catch (error) {
    console.error(error);
  }
}
function formatoConComas(input) {
  let valor = input.value.replace(/[^\d]/g, ""); // Eliminamos todos los caracteres no numéricos

  // Si hay un cero al principio, pero el número es mayor a cero, eliminamos el cero
  if (valor.length > 1 && valor[0] === "0") {
    valor = valor.slice(1);
  }

  // Insertamos comas cada tres dígitos desde el final de la cadena
  let valorFormateado = "";
  let startIndex = valor.length % 3 || 3;
  valorFormateado = valor.slice(0, startIndex);
  while (startIndex < valor.length) {
    valorFormateado += "," + valor.slice(startIndex, startIndex + 3);
    startIndex += 3;
  }

  input.value = valorFormateado;
}
async function InfoDetalle(idCiudad) {
  var Presupuesto = $("#Presupuesto").val();
  if (Presupuesto === "") {
    Swal.fire({
      icon: "info",
      text: "El Campo de presupuesto es obligatorio",
    });
    return;
  }

  let formData = new FormData();
  formData.append("funcion", "InfoDetalle");
  formData.append("Presupuesto", Presupuesto);
  formData.append("idCiudad", idCiudad);
  try {
    let req2 = await fetch("controller/controller.php", {
      method: "POST",
      body: formData,
    });
    let res2 = await req2.text();
    if (res2) {
      $("#respond").html(res2);
    }
  } catch (error) {
    console.error(error);
  }
}
