<template>
    <div>
        <h2>Produse</h2>
    </div>
</template>

<script>
export default {
  data() {
      return{
          produse: [],
          produs: {
              id: '',
              titlu: '',
              descriere: ''
          }, 
          produs_id: '',
          pagination: {},
          edit: false
      }
  }
}
</script>
