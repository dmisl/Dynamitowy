<script setup>
    import axios from 'axios';
    import { ref, onMounted, inject } from 'vue';

    const props = defineProps(['classroom_id', 'user_id', 'pre'])
    const loading = ref(true);
    const today = new Date().getDay() <= 5 ? new Date().getDay() : 1
    const timetable = ['7:10', '8:00', '8:50', '9:40', '10:30', '11:35', '12:25', '13:15', '14:05', '14:55', '15:45', '16:35',]

    const user = ref([]);
    const classroom = ref([]);
    const classroomLessons = ref([]);
    const subjects = ref([]);
    // grade variables
    const gradeReasons = ref([])
    const grades = ref([])
    const gradeLessons = ref([])
    const gradeTypes = ref()

    const title = inject('title')

    onMounted(async () => {
        try {
            const userResponse = await axios.get(`${props.pre}api/user/${props.user_id}`);
            user.value = userResponse.data.data;
            const classroomResponse = await axios.get(`${props.pre}api/classroom/${props.classroom_id}`);
            classroom.value = classroomResponse.data.data;
            const classroomLessonsResponse = await axios.get(`${props.pre}api/classroomLessons/${props.classroom_id}/${today}`);
            classroomLessons.value = classroomLessonsResponse.data.data;
            // grade/subject requests handling
            const subjectsResponse = await axios.get(`${props.pre}api/subjects`);
            subjects.value = subjectsResponse.data.data;
            const gradeReasonsResponse = await axios.get(`${props.pre}api/gradeReasons`)
            gradeReasons.value = gradeReasonsResponse.data.data
            const gradeResponse = await axios.get(`${props.pre}api/user_grades/${user.value.id}`)
            grades.value = gradeResponse.data.data
            const availableGradeReasons = []
            grades.value.forEach(grade => {
                availableGradeReasons.push(gradeReasons.value.find(obj => obj.id === grade.grade_reason_id))
            });
            gradeLessons.value = [...new Set(availableGradeReasons.map(obj => obj.subject_id))]
            const gradeTypesResponse = await axios.get(`${props.pre}api/gradeTypes`)
            gradeTypes.value = gradeTypesResponse.data.data
        } catch (error) {
            console.error('Error fetching users data:', error);
        } finally {
            loading.value = false;
            title(`Infromacja o ucznie ${user.value.name} | Dynamitowy`)
        }
    });

    const imported = inject('imported')
    const change = inject('change')

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

            <h1 class="fw-light ms-2 pt-3">Informacja o ucznie<br><span class="fw-normal">{{ user.name }}</span></h1>

            <div class="d-flex ms-3">

                <div>

                    <div class="mt-3" :style="{'width': '200px', 'height': '200px', 'background-image': `url('${user.photo}')`, 'background-position': 'center', 'background-size': 'cover'}"></div>

                    <div class="mt-3">
                        <h4>Imie nazwisko ucznia</h4>
                        <h5 class="fw-light">{{ user.name }}</h5>
                    </div>

                    <div class="mt-3">
                        <h4>Email</h4>
                        <h5 class="fw-light">{{ user.email }}</h5>
                    </div>

                    <div class="mt-3">
                        <h4>Klasa</h4>
                        <h5 class="fw-light">{{ classroom.name }}</h5>
                    </div>
                </div>

                <div class="ms-5">
                    <div class="mt-3 d-inline-block">
                        <h4 style="display: inline-block;">Ostatnie oceny</h4>
                        <div class="bg-warning rounded-2">
                            <div class="p-3 pe-5">
                                <div v-if="gradeLessons.length > 0" v-for="gradeLesson in gradeLessons">
                                    <p class="fw-medium p-0 m-0">{{ subjects.find(obj => obj.id === gradeLesson).name }}</p>
                                    <p class="small fw-medium p-0 m-0">
                                        <span v-for="gradeReason in gradeReasons.filter(obj => obj.subject_id === gradeLesson)">
                                            <span v-for="grade in grades.filter(obj => obj.grade_reason_id == gradeReason.id)">
                                                {{ gradeTypes.find(obj => obj.id == grade.type).text+', ' }}
                                            </span>
                                        </span>
                                    </p>
                                </div>
                                <div v-else>
                                    Brak ocen
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-5">
                    <div class="mt-3 d-inline-block">
                        <h4 style="display: inline-block;">Rozklad na dzisiaj</h4>
                        <div class="bg-primary-subtle rounded-2">
                            <div class="p-3 pe-5">
                                <div v-if="classroomLessons.length > 0" v-for="lesson in classroomLessons">
                                    <p class="fw-medium p-0 pt-1 m-0">{{ subjects[lesson.subject_id].name }}</p>
                                    <p class="small fw-medium p-0 m-0">{{ timetable[lesson.lesson_number] }}</p>
                                </div>
                                <div v-else>
                                    <p class="fw-medium p-0 pt-1 m-0">Dzisiaj odpoczylamy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>
