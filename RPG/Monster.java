import java.util.ArrayList;
import java.util.Random;

public class Monster {

    private String name;
    private String description;
    private int hp;
    private int minDamage;
    private int maxDamage;
    private static Random random = new Random();
    private static ArrayList<Integer> enemy = new ArrayList<Integer>();

    public static Monster newMonsterCity() {
        int num_Monster = 2;
        if (enemy.size() == num_Monster) {
            enemy.clear();
        }
        int i;
        do {
            i = random.nextInt(num_Monster);
        } while (enemy.contains(i));
        enemy.add(i);

        if (i == 0) {
            return new Monster("troll", "TROLL", 40, 3, 10);
        } else if (i == 1) {
            return new Monster("goblin", "GOBLIN", 20, 4, 10);
        } else {
            return new Monster("orc", "ORC", 30, 4, 10);
        }
    }

    private Monster(String name, String description, int hp, int minDamage, int maxDamage) {
        this.name = name;
        this.description = description;
        this.minDamage = minDamage;
        this.maxDamage = maxDamage;
        this.hp = hp;
    }

    @Override
    public String toString() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public String getStatus() {
        return "Monster HP: " + hp;
    }

    public int attack() {
        return random.nextInt(maxDamage - minDamage + 1) + minDamage;
    }

    public void defend(Player player) {
        int attackStrength = player.attack();
        hp = (hp > attackStrength) ? hp - attackStrength : 0;
        System.out.printf("  %s hits %s for %s HP of damage (%s)\n",
                player, name, attackStrength, getStatus());
        if (hp == 0) {
            System.out.println("  " + "Altaïr win");
        }
    }

    public boolean isAlive() {
        return hp > 0;
    }
}
