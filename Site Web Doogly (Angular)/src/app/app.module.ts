import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import { CalendrierComponent } from './calendrier/calendrier.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { AppRoutingModule } from './app-routing.module';
import { PasswordComponent } from './password/password.component';
import { PersonalPageComponent } from './personal-page/personal-page.component';
import { GarderieComponent } from './garderie/garderie.component';
import { NutriComponent } from './nutri/nutri.component';
import { MassageComponent } from './massage/massage.component';
import { VeterinaireComponent } from './veterinaire/veterinaire.component';
import { SportComponent } from './sport/sport.component';
import { ProPageComponent } from './pro-page/pro-page.component';


@NgModule({
  declarations: [
    AppComponent,
    CalendrierComponent,
    HomeComponent,
    LoginComponent,
    RegisterComponent,
    PasswordComponent,
    PersonalPageComponent,
    GarderieComponent,
    NutriComponent,
    MassageComponent,
    VeterinaireComponent,
    SportComponent,
    ProPageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
