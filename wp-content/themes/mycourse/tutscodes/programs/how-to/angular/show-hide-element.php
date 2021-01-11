import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  
	// Variable for show / hide element
	showElement: boolean = false;

	// Function to show / hide elements
	toggleElement() {
		this.showElement = !this.showElement;
	}
	
}