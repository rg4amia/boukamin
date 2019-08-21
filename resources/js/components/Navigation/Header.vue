<template>
    <nav id="navigation">
        <ul id="responsive">

            <li>
                <a href="#" class="current">Home</a>
                <ul class="dropdown-nav">
                    <li>
                        <router-link :to="{name: 'home'}">Home 1</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'home-2'}">Home 2</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'home-3'}">Home 3</router-link>
                    </li>
                </ul>
            </li>
            <li>
                <router-link :to="{name: 'about'}">À propos</router-link>
            </li>
        </ul>
    </nav>
</template>
