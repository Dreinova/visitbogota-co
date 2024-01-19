document.addEventListener("DOMContentLoaded", () => {
  console.log("READY!");
  const openCartButton = document.getElementById("openCart");
  const cart = document.getElementById("cart");

  openCartButton.addEventListener("click", toggleCart);

  function toggleCart() {
    cart.classList.toggle("active");
  }
  if (document.querySelector(".tc-home")) {
    getSections();
  }
  if (document.querySelector(".tc-intern")) {
    getPlanesCard();
  }
});

// Función para dar formato a los números con separadores de miles
function number_format(number, decimals, decPoint, thousandsSep) {
  decimals = decimals || 0;
  number = parseFloat(number);
  if (!decPoint || !thousandsSep) {
    decPoint = ".";
    thousandsSep = ",";
  }
  var roundedNumber = Math.round(Math.abs(number) * ("1e" + decimals)) + "";
  var numbersString = decimals
    ? roundedNumber.slice(0, decimals * -1)
    : roundedNumber;
  var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : "";
  var formattedNumber = "";
  while (numbersString.length > 3) {
    formattedNumber = thousandsSep + numbersString.slice(-3) + formattedNumber;
    numbersString = numbersString.slice(0, -3);
  }
  return (
    (number < 0 ? "-" : "") +
    numbersString +
    formattedNumber +
    (decimalsString ? decPoint + decimalsString : "")
  );
}

function updateTotalPrice(cartItem) {
  const quantity = parseInt(cartItem.querySelector(".quantity").innerText, 10);
  const unitPrice = parseInt(cartItem.getAttribute("data-unit-price"), 10);
  const totalPrice = quantity * unitPrice;
  cartItem.querySelector(".unit-price").innerText = `$${number_format(
    totalPrice,
    0,
    ".",
    "."
  )}`;
}

function incrementQuantity(button) {
  const cartItem = button.closest(".cart-item");
  const quantityElement = cartItem.querySelector(".quantity");
  let quantity = parseInt(quantityElement.innerText, 10);
  quantity++;
  quantityElement.innerText = quantity;
  cartItem.setAttribute("data-quantity", quantity);
  updateTotalPrice(cartItem);
}

function decrementQuantity(button) {
  const cartItem = button.closest(".cart-item");
  const quantityElement = cartItem.querySelector(".quantity");
  let quantity = parseInt(quantityElement.innerText, 10);
  if (quantity > 1) {
    quantity--;
    quantityElement.innerText = quantity;
    cartItem.setAttribute("data-quantity", quantity);
    updateTotalPrice(cartItem);
  }
}

function removeItem(button) {
  const cartItem = button.closest(".cart-item");
  // Aquí puedes agregar la lógica para eliminar el elemento del carrito
  console.log("Elemento eliminado del carrito:", cartItem);
}

// Calcular e inicializar los precios totales al cargar la página
document.querySelectorAll(".cart-item").forEach((cartItem) => {
  updateTotalPrice(cartItem);
});

const getSections = async () => {
  let buttons = [
    "¡empieza a descubrir Bogotá!",
    "¡Anímate ya!",
    "¡Beneficios para ti aquí!",
    "¡Adquiérela aquí!",
  ];
  const response = await fetch("/tarjeta-ciudad/g/getSections/");
  const cards = await response.json();
  document.querySelector(".tc-home .cards").innerHTML = "";
  cards.forEach((card, i) => {
    document.querySelector(".tc-home .cards").innerHTML += `
    <article class="cards-item">
      <img src="https://bogotadc.travel${card.field_image}" alt="${card.title}">
      <div class="txt">
          <h2 class="ms900">${card.title}</h2>
          <div class="ms700">
          ${card.body}
          </div>
          <a href="/es/tarjeta-ciudad/3241" class="btn ms900">${buttons[i]}</a>
      </div>
    </article>`;
  });
};

const getPlanesCard = async () => {
  let Ids = document.querySelector("main").dataset.tcoffers;
  let arrayIds = Ids.split(",");
  let containerOfertas = document.querySelector(
    ".tc-intern main .tc-plans .container ul"
  );
  containerOfertas.innerHTML = "";
  arrayIds.forEach(async (id) => {
    const response = await fetch(`/tarjeta-ciudad/g/ofertas/?id=${id}`);
    const data = await response.json();
    let template = `
      <li>
        <img src="https://bogotadc.travel${data[0].field_pb_oferta_img_listado}" alt="${data[0].title}">
        <div class="txt">
            <h3>${data[0].title}</h3>
            <p>${data[0].field_pb_oferta_desc_corta}</p>
        </div>
      </li>
      `;
    containerOfertas.innerHTML += template;
  });
};

function openAprobado() {
  $.fancybox.open({
    src: "/tarjeta-ciudad/b/statusTransaction/",
    type: "ajax",
    opts: {
      afterShow: function (instance, current) {
        console.info("done!");
      },
    },
  });
}
