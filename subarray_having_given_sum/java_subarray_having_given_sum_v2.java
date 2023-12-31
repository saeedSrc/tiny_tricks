import java.util.HashMap;
import java.util.Map;

class Main
{
    // Function to print subarray having a given sum using hashing
    public static void findSubarray(int[] nums, int target)
    {
        // create an empty map
        Map<Integer, Integer> map = new HashMap<>();

        // insert (0, -1) pair into the set to handle the case when a
        // subarray with the given sum starts from index 0
        map.put(0, -1);

        // keep track of the sum of elements so far
        int sum_so_far = 0;

        // traverse the given array
        for (int i = 0; i < nums.length; i++)
        {
            // update `sum_so_far`
            sum_so_far += nums[i];

            // if `sum_so_far - target` is seen before, we have found
            // the subarray with sum equal to `target`
            System.out.println(sum_so_far);
            if (map.containsKey(sum_so_far - target))
            {

                System.out.println("Subarray found [" +
                        (map.get(sum_so_far - target) + 1) +
                        "–" + i + "]");
                return;
            }

            // insert (current sum, current index) pair into the map

            map.put(sum_so_far, i);
        }
    }

    public static void main(String[] args)
    {
        // an integer array
        int[] nums = { -1, 2, 0, 2, -1, 4 };
        int target = 3;

        findSubarray(nums, target);
    }
}