<template>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        <li v-for="node in nodes" :class="node.nodes.length > 0 ? 'dropdown-submenu': ''">
            <a v-if="node.nodes.length > 0" class="parent-a">{{ node.label }}</a>
            <a v-if="node.nodes.length === 0" @click="select(node)">{{ node.label }}</a>
            <multi-level-dropdown
                    :nodes="node.nodes"
                    :id="node.id"
                    :label="node.label"
                    v-if="node.nodes.length > 0">
            </multi-level-dropdown>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['id', 'label', 'nodes'],
        data() {
            return {

            }
        },
        methods: {
            select(node) {
                console.log('hurrayyy');
            }
        }
    }
</script>
