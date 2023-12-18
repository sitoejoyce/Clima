

import EducationalPage from 'src/components/EducationalPage.vue';
import WeatherForecast from 'pages/WeatherForecast.vue';
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: '/sustainable-tips', component: () => import('pages/SustainableTips.vue') },
      { path: '/climate-overview', component: () => import('pages/ClimateOverview.vue') },
      { path: '/news-updates', component: () => import('pages/NewsUpdates.vue') },
      { path: '/educational-videos', component: () => import('pages/EducationalVideos.vue') },
      { path: '/educational', component: () => import('pages/EducationalPage.vue') },
      {path: '/educational-page',
        component: EducationalPage,},
      { path: '/carbon-calculator', component: () => import('pages/CarbonCalculator.vue') },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
