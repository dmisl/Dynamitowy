<script setup>
    import axios from 'axios';
    import { ref, onMounted, inject } from 'vue';

    const props = defineProps(['user_id', 'pre'])

    const user = ref([])
    const classrooms = ref([])
    const loading = ref(true)

    // models
    const userName = ref('')
    const userEmail = ref('')
    const userClassroomId = ref('')
    const userImage = ref(null)

    const title = inject('title')

    onMounted(async () => {
        try {
            const userResponse = await axios.get(`${props.pre}api/user/${props.user_id}`);
            user.value = userResponse.data.data;
            userName.value = user.value.name
            userEmail.value = user.value.email
            userClassroomId.value = user.value.classroom_id
            const classroomsResponse = await axios.get(`${props.pre}api/classrooms`);
            classrooms.value = classroomsResponse.data.data;
        } catch (error) {
            console.error('Error fetching users data:', error);
        } finally {
            loading.value = false;
            title(`Edytowanie informacji o ucznie ${user.value.name} | Dynamitowy`)
        }
    });

    function handleFile(event)
    {
        userImage.value = event.target.files[0];
    }

    async function updateUser()
    {
        try {
            const formData = new FormData();
            formData.append('id', user.value.id);
            formData.append('name', userName.value);
            formData.append('email', userEmail.value);
            formData.append('classroom_id', userClassroomId.value);
            formData.append('photo', userImage.value);

            const response = await axios.post(`${props.pre}journal/classroom/update`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });

            change(imported.rawIndex)

        } catch (error) {
            console.error('Error uploading image:', error);
        }
    };

    const change = inject('change')
    const imported = inject('imported')

</script>
<template>
    <div>

        <div v-if="loading">
            Loading..
        </div>

        <div v-else class="p-3">

            <a role="button" @click="change(imported.rawIndex)" class="d-flex mb-2">
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

            <h1 class="fw-light">Edytowanie informacji o ucznie<br><span class="fw-normal">{{ user.name }}</span></h1>

            <div class="ps-3">

                <div class="mt-4 w-50">
                    <label for="name_surname"><h3>Imie nazwisko</h3></label>
                    <input v-model="userName" id="name_surname" type="text" class="form-control" placeholder="Imie nazwisko">
                </div>

                <div class="mt-3 w-50">
                    <label for="email"><h3>Email</h3></label>
                    <input v-model="userEmail" id="email" type="text" class="form-control" placeholder="Email">
                </div>

                <div class="mt-3 w-50">
                    <label for="classes"><h3>Klasa</h3></label>
                    <select v-model="userClassroomId" id="classes" class="form-select">
                        <option v-for="classroom in classrooms" :selected="classroom.id == userClassroomId.value" :value="classroom.id">{{ classroom.name }}</option>
                    </select>
                </div>

                <div class="mt-3 w-50">
                    <label for="file" class="form-label"><h3>Photo</h3></label>
                    <input @change="handleFile" class="form-control" type="file" id="file">
                </div>

                <div class="mt-4">
                    <button class="btn btn-primary" type="button" @click="updateUser">Save changes</button>
                </div>

            </div>

        </div>

    </div>
</template>
