import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {

  constructor() { }

    ngOnInit() {
      let cc = window as any;
      cc.cookieconsent.initialise({
        palette: {
          popup: {
            background: "#f25156",
          },
          button: {
            background: "white",
            text: "#164969"
          }
        },
        theme: "classic",
        content: {
          message: "En cliquant sur ”J’accepte”, vous acceptez l’utilisation des cookies. Vous pourrez toujours les désactiver ultérieurement. Si vous supprimez ou désactivez nos cookies, vous pourriez rencontrer des interruptions ou des problèmes d’accès au site.",
          dismiss: "Accepter les cookies",
        }
      });
    }
  }
