<script setup>
import { ref, onMounted, getCurrentInstance } from 'vue';
import { Link } from '@inertiajs/vue3'

const showingNavigationDropdown = ref(false);

const app = getCurrentInstance();

onMounted(() => {
    checkWindowSize();
    $("#appScript").attr('src', window.location.origin + '/assets/js/app.js');
});

const toggleSidebar = () => {
    var window_size = getWindowSize();
    var sidebar_size = $("html").attr('data-sidebar-size');
    if(window_size == 'lg') {
        if(sidebar_size == 'lg') {
            $("html").attr('data-sidebar-size', 'sm');
            $(".hamburger-icon").addClass('open');
        } else {
            $("html").attr('data-sidebar-size', 'lg');
            $(".hamburger-icon").removeClass('open');
        }
    }
    $(".twocolumn-panel").addClass('vertical-sidebar-enable');
}

const closeSidebar = () => {
    $(".twocolumn-panel").removeClass('vertical-sidebar-enable');
}

const checkWindowSize = () => {
    if(getWindowSize() == 'sm') {
        $("body").addClass('twocolumn-panel');
    } else {
        $("body").removeClass('twocolumn-panel');
    }
}

const getWindowSize = () => {
    var size = $(window).width();
    if(size <= 768) {
        return 'sm';
    } else {
        return 'lg';
    }
}

const getCurrentMode = () => {
    return $("html").attr('data-layout-mode');
}

const changeMode = () => {
    var mode = getCurrentMode();
    if(mode == 'light') {
        $("html").attr('data-layout-mode', 'dark');
    } else {
        $("html").attr('data-layout-mode', 'light');
    }
}

// twocolumn-panel vertical-sidebar-enable
$(window).resize(function() {
    checkWindowSize();
});
</script>

<template>
    <slot />
</template>