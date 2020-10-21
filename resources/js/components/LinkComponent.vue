<template>
    <div class="link">
        <a
            v-on:click="storeVisit(link.id, link.link)"
            :href="link.link"
            class="user-link d-block p-4 my-4 rounded h3 text-center"
            target="_blank"
            rel="nofollow"
            :style="{
                border: '2px solid ' + user.text_color,
                color: user.text_color
            }"
            >{{ link.name }}</a
        >
    </div>
</template>

<script>
export default {
    name: "link-component",
    props: ["link", "user"],

    methods: {
        storeVisit(linkId, linkUrl) {
            axios
                .post("/visit/" + linkId, {
                    link: linkUrl
                })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style></style>
