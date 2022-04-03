<template>
  <div class="row">
    <div class="col-lg-12 mb-4">
      <router-link :to='{name:"crearPasteles"}' class="btn btn-success">Nuevo</router-link>
    </div>

    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tamaño</th>
              <th scope="col">Ingredintes</th>
              <th scope="col">Precio</th>
              <th scope="col">Opción</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="pastel in pastels" :key="pastel.id">
              <th>{{ pastel.id }}</th>
              <td>{{ pastel.tamaño }}</td>
              <td>{{ pastel.ingredientes }}</td>
              <td>{{ pastel.precio }}</td>
              <td>
                <router-link :to='{name:"editarPasteles", params:{id:pastel.id }}' class="btn btn-info">editar</router-link>
                <a type="button" @click="borrarPastel(pastel.id)" class="btn btn-primary">Borrar</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</template>

<script>
export default {
    name: "pastels",
    data(){
      return {
        pastels:[]
      }
    },
    mounted(){
      this.mostrarPasteles()
    },
    methods:{
      async mostrarPasteles(){
        await this.axios.get('/api/pastel').then(response=>{
            this.pastels = response.data
          }).catch(error=>{
            console.log(error)
            this.pastel = []
          })
      },
      borrarPastel(id) {
        if (confirm("¿Confirma eliminar el registro?")){
          this.axios.delete(`/api/pastel/${id}`).then(response=>{
              this.mostrarPasteles()
            })
            .catch(error=>{
              
            })
        }
      }
    }
}
</script>