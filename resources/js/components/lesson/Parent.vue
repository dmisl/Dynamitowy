<script setup>

    import { markRaw, ref, provide, onMounted } from 'vue';
    import axios from 'axios'

    import Show from './Show.vue';
    import Edit from './Edit.vue';
    import Grade from './Grade.vue';

    const props = defineProps(['teacher_id', 'prefix'])

    const rawShow = markRaw(Show)
    const rawEdit = markRaw(Edit)
    const rawGrade = markRaw(Grade)

    const currentComponent = ref(rawShow)
    const lesson_id = ref(0)
    const classroom_id = ref(0)
    const subject_id = ref(0)

    const lessons = ref([]);
    const classrooms = ref([]);
    const subjects = ref([]);
    const loading = ref(true);

    const timetable = ['7:10', '8:00', '8:50', '9:40', '10:30', '11:35', '12:25', '13:15', '14:05', '14:55', '15:45', '16:35',]
    const date = ref(new Date().toISOString().split('T')[0])

    function changeDate(event)
    {
        let day = new Date(event.target.value).getDay() <= 5 ? new Date(event.target.value).getDay() : 1
        axios.get(`${props.prefix}api/todayLessons/${props.teacher_id}/${day}`)
        .then(response => {
            lessons.value = response.data.data;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
        change(rawShow, 0)
    }

    onMounted(async () => {
        try {
            const lessonsResponse = await axios.get(`${props.prefix}api/todayLessons/${props.teacher_id}/0`);
            lessons.value = lessonsResponse.data.data;
            const classroomsResponse = await axios.get(`${props.prefix}api/classrooms`);
            classrooms.value = classroomsResponse.data.data;
            const subjectsResponse = await axios.get(`${props.prefix}api/subjects`);
            subjects.value = subjectsResponse.data.data;
        } catch (error) {
            console.error('Error fetching users data:', error);
        } finally {
            loading.value = false;
        }
    });

    function change(component, lessonId = 0, classroomId = 0, subjectId = 0)
    {
        currentComponent.value = component
        lesson_id.value = lessonId
        classroom_id.value = classroomId
        subject_id.value = subjectId
    }

    provide('imported', {rawShow, rawEdit, rawGrade, timetable, lesson_id, classroom_id, subject_id, date})
    provide('change', change)

</script>

<template>

    <div class="d-flex">

        <div style="height: 100%;">
            <div class="col-md-3 bg-gradient" style="position: fixed; height: 100vh; background-color: rgb(119 178 255);">
                <div class="user-select-none">

                    <div v-if="loading">
                        Loading...
                    </div>

                    <div v-else>

                        <input @change="changeDate" class="w-100 p-1" type="date" :value="date">

                        <a v-for="lesson in lessons" role="button" @click="change(rawShow, lesson.id, lesson.classroom_id)" class="text-decoration-none text-dark">
                            <div class="m-0 p-0 border-bottom border-dark">
                                <p class="p-0 m-0 ps-1 pt-1 fw-medium">{{ classrooms.find(obj => obj.id === lesson.classroom_id).name }} - {{ timetable[lesson.lesson_number] }}</p>
                                <p class="p-0 m-0 ps-1 small text-wrap">{{ subjects.find(obj => obj.id === lesson.subject_id).name }}</p>
                            </div>
                        </a>

                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-3"></div>

        <div class="col-md-9">

            <div v-if="lesson_id == 0" class="mt-5 text-center">
                <h2 class="fw-light">Wybierz lekcje</h2>
            </div>
            <div v-else>
                <component :is="currentComponent" :pre="props.prefix"></component>
            </div>

        </div>

    </div>

</template>
