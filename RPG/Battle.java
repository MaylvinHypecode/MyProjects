import java.util.Scanner;

public class Battle {

    public Battle(Player player, Monster monster) {
        System.out.println("You encounter " + monster + ": " + monster.getDescription() + "\n");
        System.out.println("Battle with " + monster + " starts (" + player.getStatus() + " / "
                + monster.getStatus() + ")");
        Scanner in = new Scanner(System.in);
        while (player.isAlive() && monster.isAlive()) {
            System.out.print("Attack (a) or heal (h)");
            String action = in.nextLine();
            if (action.equals("a")) {
                player.attack();
                monster.defend(player);
            }
            if (monster.isAlive()) {
                player.defend(monster);
            }
            if (action.equals("h")) {
                player.heal();
            }
        }
    }
}
