let maxAllowedSelections = 4; // Límite de selecciones permitidas

const validateCheckboxes = () => {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  const checkboxForm = document.getElementById("disenaForm");

  checkboxForm.addEventListener("change", () => {
    let checkedCount = 0; // Contador de checkboxes seleccionados

    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        checkedCount++;
      }
    });

    if (checkedCount >= maxAllowedSelections) {
      // Si se alcanza el límite, deshabilitar los checkboxes no seleccionados
      checkboxes.forEach((checkbox) => {
        if (!checkbox.checked) {
          checkbox.disabled = true;
        }
      });
    } else {
      // Si no se alcanza el límite, habilitar todos los checkboxes
      checkboxes.forEach((checkbox) => {
        checkbox.disabled = false;
      });
    }
  });
};

const getProducts = async () => {
  if (document.querySelector(".dtv-home__categories-list")) {
    const response = await fetch(
      `/planifica-tu-viaje/g/getProducts/?lang=${actualLang}`
    );
    const data = await response.json();

    const checkboxesContainer = document.querySelector(
      ".dtv-home__categories-list"
    );

    data.forEach(async (item, i) => {
      const subproducts = await fetch(
        `/planifica-tu-viaje/g/getsubProducts/?lang=${actualLang}&id=${item.nid}`
      )
        .then((res) => res.json())
        .then((subs) => {
          return subs;
        });

      const listItem = document.createElement("li");
      listItem.innerHTML = `<label for="${
        item.nid
      }" class="ms500"><input type="checkbox" name="category" id="${
        item.nid
      }" value="${
        item.nid
      }" /><div class="content"><div class="img"><img src="https://files.visitbogota.co${
        item.field_icon
      }" alt="${get_alias(item.title)}" /></div><span>${
        item.title
      }</span></div></label><input name="subproducts-${
        item.nid
      }" type="hidden" id="subproducts-${item.nid}" value="${subproducts
        .map((sub) => sub.nid)
        .join("+")}" />`;

      checkboxesContainer.appendChild(listItem);

      // Llama a la función de validación cada vez que se crea un nuevo checkbox
      validateCheckboxes();
    });
  }
};
const getPara = async () => {
  const response = await fetch(
    `/planifica-tu-viaje/g/getPara/?lang=${actualLang}`
  );
  const data = await response.json();
  if (document.querySelector(".dtv-home .filter-data span select#para")) {
    data.forEach((item) => {
      document.querySelector(
        ".dtv-home .filter-data span select#para"
      ).innerHTML += `<option value="${item.nid}">${item.title}</option>`;
    });
  }
};

function scrollToElement(element) {
  // Calcula la posición del elemento
  var elementPosition = element.offsetTop;

  // Hace scroll a la posición del elemento
  window.scrollTo({
    top: elementPosition,
    behavior: "smooth", // Para un desplazamiento suave
  });
}

function getFormValues() {
  const form = document.getElementById("disenaForm");
  const formData = new FormData(form);

  // Object to store form values
  const formValues = {};

  // Iterate over the form data and store the values
  for (const [key, value] of formData.entries()) {
    if (!formValues[key]) {
      formValues[key] = [value]; // Always store the value in an array
    } else {
      // If the value already exists (e.g., multiple checkboxes with the same name), push the new value to the array
      formValues[key].push(value);
    }
  }

  return formValues;
}

function obtenerTextosSeleccionados() {
  // Obtén todos los checkboxes con el nombre "category"
  var checkboxes = document.getElementsByName("category");

  // Array para almacenar los textos seleccionados
  var textosSeleccionados = [];

  // Itera sobre los checkboxes y agrega el texto al array si está seleccionado
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      var labelText =
        checkboxes[i].parentNode.querySelector(".content").textContent;
      textosSeleccionados.push(labelText);
    }
  }

  // Muestra los textos seleccionados en la consola o haz lo que necesites con ellos
  return textosSeleccionados;
}
document.addEventListener("DOMContentLoaded", async () => {
  await getProducts();
  await getPara();

  document.getElementById("disenaForm").addEventListener("submit", (e) => {
    e.preventDefault();
    let allCats = [];
    if (
      document.querySelectorAll('input[type="checkbox"]:checked').length > 0 &&
      document.querySelector("#time").value != "" &&
      document.querySelector("#para").value != ""
    ) {
      document.querySelector(".dtv-home .filter-data button").innerHTML =
        "Generando...";

      getFormValues().category.forEach((cat) => {
        allCats.push(document.querySelector(`#subproducts-${cat}`).value);
      });
      fetch(
        `/planifica-tu-viaje/g/getAtractivos/?category=${allCats.join(
          "+"
        )}&para=${getFormValues().para}`
      )
        .then((res) => res.json())
        .then(async (data) => {
          document.querySelector(
            ".dtv-home .imperdibles .grid-imperdibles"
          ).innerHTML = "";
          for (let index = 0; index < getFormValues().time * 2; index++) {
            const element = data[index];
            let image = await getImageFromCacheOrFetch(
              `${urlGlobal}${
                element.field_cover_image
                  ? element.field_cover_image
                  : "/img/noimg.png"
              }`
            );
            let template = `<a href="/${actualLang}/atractivo/all/${get_alias(
              element.title
            )}-all-${element.nid}" class="wait" data-id="${
              element.nid
            }"><div class="site_img"><img loading="lazy" src="https://picsum.photos/20/20" data-src="${image}" alt="${
              element.title
            }" class="lazyload"></div><span>${element.title}</span></a>`;
            document.querySelector(
              ".dtv-home .imperdibles .grid-imperdibles"
            ).innerHTML += template;
          }
        })
        .finally(() => {
          document.querySelector(".dtv-home .filter-data button").innerHTML =
            "DISEÑA TU VIAJE";
          document.querySelector(
            ".dtv-home .info-user .content .right .time p"
          ).innerHTML =
            document.querySelector("select#time").options[
              document.querySelector("select#time").selectedIndex
            ].text;
          document.querySelector(
            ".dtv-home .info-user .content .right .tipoviaje p"
          ).innerHTML = `${
            document.querySelector("select#para").options[
              document.querySelector("select#para").selectedIndex
            ].text
          }`;
          document.querySelector(
            ".dtv-home .info-user .content .right .interes p"
          ).innerHTML = obtenerTextosSeleccionados();
          var revealElement = document.getElementById("reveal");
          revealElement.style.height = revealElement.scrollHeight + "px";
          scrollToElement(revealElement);
          lazyImages();
        });
    } else {
      console.error("No hay categorias seleccionadas!");
      Fancybox.show([{ src: "#dialog-content", type: "inline" }]);
    }
  });
});
