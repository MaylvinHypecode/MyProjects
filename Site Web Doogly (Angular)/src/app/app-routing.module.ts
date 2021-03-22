import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { HomeComponent } from './home/home.component';
import { CalendrierComponent } from './calendrier/calendrier.component';
import { PasswordComponent } from './password/password.component';
import { PersonalPageComponent } from './personal-page/personal-page.component';
import { GarderieComponent } from './garderie/garderie.component';
import { VeterinaireComponent } from './veterinaire/veterinaire.component';
import { NutriComponent } from './nutri/nutri.component';
import { MassageComponent } from './massage/massage.component';
import { SportComponent } from './sport/sport.component';
import { ProPageComponent } from './pro-page/pro-page.component';



const routes: Routes = [];

export const appRouteList: Routes = [
  { path: 'login', component: LoginComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'home', component: HomeComponent },
  { path: 'calendrier', component: CalendrierComponent },
  { path: 'password', component: PasswordComponent },
  { path: 'personal-page', component: PersonalPageComponent },
  { path: 'garderie', component: GarderieComponent },
  { path: 'veterinaire', component: VeterinaireComponent },
  { path: 'nutritionniste', component: NutriComponent },
  { path: 'massage', component: MassageComponent },
  { path: 'sport', component: SportComponent },
  { path: 'pro-page', component: ProPageComponent },
  { path: '', component: HomeComponent }
];


@NgModule({
  imports: [RouterModule.forRoot(appRouteList)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
