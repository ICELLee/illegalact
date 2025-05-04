<div class="fixed inset-0 overflow-hidden -z-10 opacity-20">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-purple-900/10 to-blue-900/10"></div>
    <div class="absolute inset-0 bg-[url('../images/bg/animated-bg.svg')] bg-[length:1200px] opacity-60 animate-pan"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_transparent_0%,_rgba(0,0,0,0.8)_70%)]"></div>
</div>

<style>
    @keyframes pan {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }
    .animate-pan {
        animation: pan 60s linear infinite;
    }
</style>
