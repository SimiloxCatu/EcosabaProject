<template>
        <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4>Editar registro</h4> </div>
                </div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">

                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="for-group">
                                    <label> Tamaño </label>
                                    <input type="text" class="form-control" v-model="pastel.tamaño">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea" v-model="pastel.ingredientes"></textarea>
                                    <label>Ingredientes</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="double" class="form-control" v-model="pastel.precio">
                                    <label>Precio</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name:"editar-pastel",
    data(){
        return{
            pastel:{
                tamaño:"",
                ingredientes:"",
                precio:""
            }
        }
    },
    mounted(){
        this.mostrarPasteles()
    },
    methods:{
        async mostrarPasteles(){
            this.axios.get(`/api/pastel/${this.$route.params.id}`)
                .then(response=>{
                    const {tamaño, ingredientes, precio} = response.data
                    this.pastel.tamaño = tamaño,
                    this.pastel.ingredientes = ingredientes,
                    this.pastel.precio = precio
                })
                .catch(error=>{
                    console.log(error)
                })
        },
        async actualizar(){
            this.axios.put(`/api/pastel/${this.$route.params.id}`, this.pastel)
                .then(response=>{
                    this.$router.push({
                        name:"mostrarPasteles"
                    })
                })
                .catch(error=>{
                    console.log(error)
                })
        }
    }
}
</script>
