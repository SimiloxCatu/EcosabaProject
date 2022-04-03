<template>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4>Crear registro</h4> </div>
                </div>
                <div class="card-body">
                    <form @submit.prevent="crear">

                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="for-group">
                                    <label> Tamaño </label>
                                    <input type="text" class="form-control" v-model="pastel.tamaño">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <label> Ingredientes</label>
                                    <input type="text" class="form-control" v-model="pastel.ingredientes">
                                    
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" v-model="pastel.precio">
                                    <label > Precio</label>
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
    name:"crear-pastel",
    data(){
        return{
            pastel:{
                tamaño:"",
                ingredientes:"",
                precio:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/pastel', this.pastel)
                .then(response=>{
                    this.$router.push({name:"mostrarPasteles"})
                })
                .catch(error=>{
                    console.log(error)
                })
        }
    }
}
</script>
