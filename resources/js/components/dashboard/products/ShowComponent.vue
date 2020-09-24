<template>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">{{message}}</h5>
            <ul>
                <li>
                    <strong>Título:</strong> {{product.title}}
                </li>
                <li>
                    <strong>Descripcion:</strong> 
                    <p class="card-text">{{product.description}}</p>
                </li>
                <li>
                    <strong>Letra:</strong>
                    <p class="card-text">{{product.lyrics}}</p>
                </li>
                <li>
                    <strong>Precio:</strong> {{product.formatted_price}}
                </li>
                <li>
                    <strong>Audio:</strong> {{product.file}}
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
};
</script>

