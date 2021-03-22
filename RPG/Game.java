import java.util.Scanner;

public class Game {

    private Player player = new Player("Altaïr", "Warrior", 30, 5, 10, 10);

    public void play() {

        Scanner input = new Scanner(System.in);
        System.out.println("  Solo : press (1)" + "      " + "Multi : press (2)" + "      " + "Exit : press (3)");
        int Mode = input.nextInt();
        if (Mode == 1) {
            Map.makeMap();
            System.out.println("You are a " + player.getDescription() + " and your name is " + player.toString());
            Kingdom.newGame().startGame(player);
        } else if (Mode == 2) {
            System.out.println("This mode is working !");
        } else if (Mode == 3) {
            System.out.println("Your level is low for this quest" + "\n" + "Your leave the Dungeon.");
        }
    }
}
