<script setup>

    import { ref, inject, onMounted } from 'vue'
    import axios from 'axios'

    const props = defineProps(['prefix'])

    const imported = inject('imported')
    const change = inject('change')

    const teachers = ref([])
    const users = ref([])

    onMounted(async () => {
        try {
            const teachersResponse = await axios.get(`${props.prefix}api/teachersModel`)
            teachers.value = teachersResponse.data.data
            const usersResponse = await axios.get(`${props.prefix}api/users`)
            users.value = usersResponse.data.data
        } catch (error) {
            console.error(error)
        }
    })

    const classroom = ref({name: '', teacher_id: ''})

    async function createClassroom()
    {
        try {
            const formData = new FormData()
            formData.append('name', classroom.value.name)
            formData.append('teacher_id', classroom.value.teacher_id)

            const response = await axios.post(`${props.prefix}classroom/new_classroom`, formData)

            console.log(response.data)

        } catch (error) {
            console.error(error)
        } finally {
            change(imported.rawIndex)
        }
    }

    const title = inject('title')
    title(`Dodanie klasy | Dynamitowy`)

</script>

<template>
    <div>

        <div class="p-3 user-select-none">

            <a role="button" @click="change(imported.rawIndex)" class="d-flex ms-2 my-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="21" height="21" viewBox="0 0 256 256" xml:space="preserve">
                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <circle cx="45" cy="45" r="45" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(32,196,203); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                        <path d="M 70.191 51.154 H 13.5 c -1.169 0 -2.232 -0.68 -2.723 -1.741 s -0.32 -2.312 0.438 -3.203 l 18.258 -21.462 c 1.074 -1.262 2.967 -1.414 4.229 -0.341 c 1.262 1.074 1.415 2.967 0.341 4.229 L 19.991 45.154 h 50.201 c 1.657 0 3 1.343 3 3 S 71.849 51.154 70.191 51.154 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 31.759 72.617 c -0.849 0 -1.693 -0.358 -2.287 -1.057 L 11.215 50.098 c -0.758 -0.891 -0.929 -2.141 -0.438 -3.202 s 1.554 -1.741 2.723 -1.741 h 56.691 c 1.657 0 3 1.343 3 3 s -1.343 3 -3 3 H 19.991 l 14.052 16.52 c 1.073 1.262 0.921 3.155 -0.341 4.229 C 33.137 72.383 32.446 72.617 31.759 72.617 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 73.5 47.846 H 16.809 c -1.169 0 -2.232 -0.68 -2.723 -1.741 s -0.32 -2.312 0.438 -3.203 l 18.257 -21.462 c 1.072 -1.262 2.967 -1.416 4.229 -0.341 c 1.262 1.074 1.415 2.967 0.341 4.229 L 23.299 41.846 H 73.5 c 1.657 0 3 1.343 3 3 C 76.5 46.503 75.157 47.846 73.5 47.846 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 35.067 69.309 c -0.85 0 -1.693 -0.358 -2.287 -1.057 L 14.523 46.789 c -0.758 -0.891 -0.929 -2.141 -0.438 -3.202 s 1.554 -1.741 2.723 -1.741 H 73.5 c 1.657 0 3 1.343 3 3 c 0 1.657 -1.343 3 -3 3 H 23.299 l 14.052 16.52 c 1.073 1.262 0.921 3.155 -0.341 4.229 C 36.445 69.074 35.754 69.309 35.067 69.309 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <div class="d-table ms-1">
                    <p class="d-table-cell align-middle m-0 p-0 small">Wrocz</p>
                </div>
            </a>

            <div class="p-2">

                <h1 class="fw-light">Dodanie klasy</h1>

                <div class="col-md-4 offset-4">
                    <div class="card mt-5">
                        <div class="card-body">

                            <div class="mt-3">
                                <label for="name" class="form-label fs-5 m-0 p-0">Nazwa klasy</label>
                                <input v-model="classroom.name" type="text" class="form-control">
                            </div>

                            <div class="mt-2">
                                <label for="name" class="form-label fs-5 m-0 p-0">Wychowawca klasy</label>
                                <select v-model="classroom.teacher_id" class="form-select" id="name">
                                    <option v-for="teacher in teachers" :value="teacher.id">{{ users.find(obj => obj.id == teacher.user_id) ? users.find(obj => obj.id == teacher.user_id).name : '' }}</option>
                                </select>
                            </div>

                            <div v-if="classroom.name && classroom.teacher_id" class="text-center">
                                <button @click="createClassroom" class="btn btn-primary btn mt-4">
                                    Utwórz
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>
